$(document).ready(function () {
    $('.callapse_block').click(function () {
        $('.callapse_block').css('border-top','none');
        $(this).css('border-top','1px solid #3e4b5c');
    })


    //services
    window.count = 0;
    $('.add_block').click(function () {
        count++;
        content = '';
        content += '<div>';
        content += '<div class="col-md-10">';

            content += '<div class="panel-group">';
                content += '<div class="panel panel-default">';

                        content += '<input name="skill_en_'+count+'" type="text" class="form-control" placeholder="Skill en">'

                content += '</div>';
                content += '<div class="panel panel-default">';

                        content += '<input name="skill_arm_'+count+'" type="text" class="form-control" placeholder="Skill Arm">'

                content += '</div>';
                content += '<div class="panel panel-default">';

                        content += '<input name="skill_rus_'+count+'" type="text" class="form-control" placeholder="Skill Rus">'

                content += '</div>';
            content += '</div>';
        content += '</div>';
        content += '<div class="col-md-2 add_button_block"><i style="color:red;cursor:pointer" class="glyphicon glyphicon-remove remove_click"></i></div>';
        content += '</div>';
        $('.skills_block').append(content);

    })

    $(document).on('click','.remove_click',function () {
        count--;
        $(this).parent().parent().remove();
    })
    //end services





})