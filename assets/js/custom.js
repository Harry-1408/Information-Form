
$('#check-for-same-address').click(function() {
    if ($(this).is(':checked')) {
        var home_address=$("#home-address").val();
        var home_pincode=$("#home_pinode").val();
        var home_country=$("#home_country").val();
        var home_state=$("#home_state").val();
        var home_city=$("#home_city").val();

        $('#business_address').val(home_address);
        $('#business_pinode').val(home_pincode);

        $('#business_country').val(home_country).prop('selected', true);
        $('#select2-chosen-7').text($('#home_country :selected').text());

        $('#business_state').val(home_state).prop('selected', true);
        $('#select2-chosen-8').text($('#home_state :selected').text());

        $('#business_city').val(home_city).prop('selected', true);
        $('#select2-chosen-9').text($('#home_city :selected').text());

        if(home_address!='') {
            $('#business_address_lable').css('top', '0px');
            $('#business_address_lable').css('font-size', '12px');
        }
        if(home_pincode!='') {
            $('#business_pinode_label').css('top', '0px');
            $('#business_pinode_label').css('font-size', '12px');
        }
        /* Setting value for home & business as same */

    }
    else
    {
        $('#business_address').val('');
        $('#business_pinode').val('');

        $('#business_address_lable').removeAttr( 'style' );
        $('#business_pinode_label').removeAttr( 'style' );

        $('#business_country').val(0).prop('selected', true);
        $('#select2-chosen-6').text('Select Country');

        $('#business_state').val(0).prop('selected', true);
        $('#select2-chosen-7').text('Select State');

        $('#business_city').val(0).prop('selected', true);
        $('#select2-chosen-8').text('Select City');
    }
});

$('#submit').click(function(){
    if((status == "Merried" || status == "Widow")) {
        /*Get Headperson Info*/
        if($('input[name=gendre]:checked').val()=='Male') {
            var headperson_surname = $('#headperson_surname').val();
            var headperson_name = $('#headperson_firstname').val();

            $('#sub_headperson_surname').val(headperson_surname);
            $('#sub_headperson_middlename').val(headperson_name);

            $('#sub_headperson_surname_label').css('top', '0px');
            $('#sub_headperson_surname_label').css('font-size', '12px');
            $('#sub_headperson_middlename_label').css('top', '0px');
            $('#sub_headperson_middlename_label').css('font-size', '12px');

            $('#head_person_sub_person').text(headperson_name);
            $('#gender_type_sub').text('Wife');

            $('input:radio[name=gendre_subperson]').filter('[value=Female]').prop('checked', true);
        }
        else if($('input[name=gendre]:checked').val()=='Female') {
            var headperson_surname = $('#headperson_surname').val();
            var headperson_middlename = $('#headperson_middlename').val();

            $('#sub_headperson_surname').val(headperson_surname);
            $('#sub_headperson_firstname').val(headperson_middlename);

            $('#sub_headperson_surname_label').css('top', '0px');
            $('#sub_headperson_surname_label').css('font-size', '12px');
            $('#sub_headperson_name_label').css('top', '0px');
            $('#sub_headperson_name_label').css('font-size', '12px');

            $('#head_person_sub_person').text(headperson_middlename);
            $('#gender_type_sub').text('Husband');
            $('input:radio[name=gendre_subperson]').filter('[value=Female]').prop('checked', true);
        }

        $('#merried_section').css('display','block');
        $('#select_children').css('display','block');
    }
    else
    {
        $('#merried_section').css('display','none');
        $('#select_children').css('display','none');
        $('#select_boys').css('display','none');
        $('#select_girls').css('display','none');
    }

});
    