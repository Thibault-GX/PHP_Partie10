$(document).ready(function () {
    $('#skillAndProfessionalDatas').hide();
    $('#personnalStories').hide();

    $('#fromStep1ToStep2').click(function () {
        $('#personnalDatas').hide();
        $('#skillAndProfessionalDatas').show();
    });

    $('#fromStep2ToStep3').click(function () {
        $('#skillAndProfessionalDatas').hide();
        $('#personnalStories').show();
    });

    $('#fromStep3ToStep2').click(function () {
        $('#personnalStories').hide();
        $('#skillAndProfessionalDatas').show();
    });

    $('#fromStep2ToStep1').click(function () {
        $('#skillAndProfessionalDatas').hide();
        $('#personnalDatas').show();
    });
});