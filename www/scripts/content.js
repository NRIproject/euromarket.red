$(document).ready(function(){

    $("#order_button").click(function(){
        $(".order_product").removeAttr("hidden");
    });
    $("#close_order").click(function(){
        $(".order_product").attr("hidden", "hidden");
    });
    $("#customer").click(function() {

        $("#i_customer").removeAttr("hidden");
        $("#i_order").attr("hidden", "hidden");
        $("#i_delivering").attr("hidden", "hidden");
        $("#i_buying").attr("hidden", "hidden");
        $("#i_garants").attr("hidden", "hidden");
        $("#i_none").attr("hidden", "hidden");

    });
    $("#order").click(function() {

        $("#i_customer").attr("hidden", "hidden");
        $("#i_order").removeAttr("hidden");
        $("#i_delivering").attr("hidden", "hidden");
        $("#i_buying").attr("hidden", "hidden");
        $("#i_garants").attr("hidden", "hidden");
        $("#i_none").attr("hidden", "hidden");
    });
    $("#delivering").click(function() {

        $("#i_customer").attr("hidden", "hidden");
        $("#i_order").attr("hidden", "hidden");
        $("#i_delivering").removeAttr("hidden");
        $("#i_buying").attr("hidden", "hidden");
        $("#i_garants").attr("hidden", "hidden");
        $("#i_none").attr("hidden", "hidden");
    });
    $("#buying").click(function() {

        $("#i_customer").attr("hidden", "hidden");
        $("#i_order").attr("hidden", "hidden");
        $("#i_delivering").attr("hidden", "hidden");
        $("#i_buying").removeAttr("hidden");
        $("#i_garants").attr("hidden", "hidden");
        $("#i_none").attr("hidden", "hidden");
    });
    $("#garants").click(function() {

        $("#i_customer").attr("hidden", "hidden");
        $("#i_order").attr("hidden", "hidden");
        $("#i_delivering").attr("hidden", "hidden");
        $("#i_buying").attr("hidden", "hidden");
        $("#i_garants").removeAttr("hidden");
        $("#i_none").attr("hidden", "hidden");
    });
    $("#descript").click(function(){
        $("#info_despript").removeAttr("hidden");
        $("#info_table").attr("hidden", "hidden");
    });
    $("#tab").click(function(){
        $("#info_table").removeAttr("hidden");
        $("#info_despript").attr("hidden", "hidden");
    });
    $("#order_product").click(function (){
        $("#how_to_buy").removeAttr("hidden");
    });
    $("#close_contacts").click(function () {
        $("#how_to_buy").attr("hidden", "hidden");
    });
});