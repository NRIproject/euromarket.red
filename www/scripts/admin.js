$(document).ready(function() {

    fullSelectInputs();

    function takeData(){
        //функция которая собирает отправленные данные

        var product = {
            "name": $("#p_name").val(),
            "firm": $("#p_firm").val(),
            "category": $("#p_type").val(),
            "price": $("#p_price").val(),
            "description": $("#p_description").val(),
            "details": takeDetailsFromTable()
        };
        if(!validateData(product)){
            alert("Проверьте введенную информацию. Товар не отправлен");
        }
        else{
            sendData(product);
        }
    }
    function takeDetailsFromTable(){
        var detailsTable = [];
        var count = $(".details_input").length;
        for(var i = 0; i < count; i++){
            detailsTable[i] = $("#table_"+i).val();
        }
        var htmlDetails = "<table><tr>";
        for(i = 0; i < count; i++){
            htmlDetails+= "<td>"+$("#field_"+i).text()+"</td>";
            htmlDetails+= "<td>"+detailsTable[i]+"</td>";
            htmlDetails+= "</tr>";
        }
        htmlDetails += "</table>";
        return htmlDetails;
    }
    function failedValidation(step, reason){
       $(step).css("background-color", "#FF4500");
       alert(reason);
    }
    function validateData(product){
        var mistakes = [];
        var i = 0;
        for (var key in product){
            console.log(product[key]);
            if(!product[key]){
                mistakes.push(i);
                i++;
            }
            else{
                i++;
            }
        }
        if(mistakes.length > 0){
            for(var k = 0; k < mistakes.length; k++){
                switch(mistakes[k]){
                    case 0: failedValidation("#p_name", "Заполните поле"); break;
                    case 1: failedValidation("#p_firm", "Заполните поле"); break;
                    case 2: failedValidation("#p_type", "Заполните поле"); break;
                    case 3: failedValidation("#p_price", "Заполните поле"); break;
                    case 4: failedValidation("#p_description", "Заполните поле"); break;
                    case 5: failedValidation("#details_table", "Заполните поле"); break;
                    default: break;
                }
            }
            return false;
        }
        if(!Number(product.price)){
            failedValidation("#p_price", "Неправильная цена");
            return false;
        }
        return true;
    }
    function sendData(product){
        $.ajax(
            {
                type: "post",
                url: "server/add_product.php",
                dataType: "Text",
                data: product,
                async: false,
                success: function (response)
                {
                    alert(response);
                },
                error: function()
                {
                    alert("Ошибка при отправке данных на сервер");
                }
            }
        );
    }

    function fullSelectInputs(){
        $.getJSON("/settings.json", function(data) {
            var firmsList = data.firms;
            var typeList = data.kinds;
            var typeTable = data.descriptions;
            var typeTableId = [];
            for (var i = 0; i < firmsList.length; i++){
                $("#p_firm").append("<option id=f_" + i + ">"+firmsList[i]+"</option>");
            }
            i = 0;
            for(var key in typeTable){
                typeTableId[i] = key;
                i++;
            }
            for(i = 0; i < typeList.length; i++ ){
                $("#p_type").append("<option id=t_" + typeTableId[i] + ">"+typeList[i]+"</option>");
            }
        });
    }
    function createTable(jsonData){
        var l = jsonData.length;
        $("#p_details").html("");
        var htmlTable = "";
        for(var i = 0; i < l; i++){
            htmlTable += "<tr>";
            htmlTable += "<td id='field_"+i+"'>"+jsonData[i]+"</td>";
            htmlTable += "<td><input class='details_input' type='text' id='table_"+i+"'></td>";
            htmlTable += "</tr>";
        }
        $("#p_details").append(htmlTable);
    }
    $("#p_type").click(function(){
        var selectKind = $("#p_type :selected").attr("id");
        selectKind = selectKind.substr(2, selectKind.length);
        $.getJSON("/settings.json", function (data) {
            createTable(data.descriptions[selectKind]);
        })
    });

    $("#send_product").click(function(){takeData();});

    $("#get-image").click(function(){
        console.log("Hello");
        console.log($("#p_img").val());
        $("#loading-image").append("<img src='"+$("#p_img").val()+"'>");
    })
});