$(document).ready(function () {
    $('[data-tooltip="tooltip"]').tooltip({ boundary: 'window' })
    $( "#list_tab" ).sortable();
    $('#removeText, #default-prev, #play-view, #serve-lists').hide();
    $('#btn-present').prop('disabled', true).css('cursor', 'not-allowed');

    previewScreen(true);
    getSongList();
    getServiceLists();
    getDataLists();

    $(".data_lists").on('click', function() {
        $('.text-view').removeClass('text-dark');
        $('.card-body').addClass('default-color');

        previewScreen(false);

        let text = $(this).find('p').attr('data').replace(/<br ?\/?>/g, "\r\n");
        $('#preview_lists').hide().text(text).fadeIn('slow');
        $(this).find('p').addClass('text-dark');
        $(this).removeClass('default-color');
    });

    $('.list-songs').on('click', function () {
        let check = !$(this).find('input.chk-list').prop('checked');
        $(this).find('input.chk-list').prop('checked', check);
        checkIfCheck($(this).find('input.chk-list').prop('checked'));
    });

    $('.chk-list').on('change', function() {
        checkIfCheck(this.checked);
    });

    $('#chk-all').on('change', function () {
        let length = $('input.chk-list:checkbox').length;
        for (let i = 0; i < length; i++) {
            $('#chk-list-'+i).prop( "checked", !!this.checked);
            if (!this.checked) {
                $('.menus-2').hide();
                $('.menus-1').show();
            }
        }
    });

     $('#chk-all-service').on('change', function () {
        let length = $('input.chk-service:checkbox').length;
        for (let i = 0; i < length; i++) {
            $('#chk-service-'+i).prop( "checked", !!this.checked);
            if (!this.checked) {
                 $('.service-list').show();
                 $('#serve-lists').hide();
                 $('#btn-present').prop('disabled', true).css('cursor', 'not-allowed');
            }
        }
    });

    $('.list-service').on('click', function (e) {
        e.preventDefault();
        $('.list-service').removeClass('active').css('transition', 'all 0.5s');
        $(this).addClass('active').css('transition', 'all 0.5s');
        $('#btn-present').prop('disabled', false).css('cursor', 'pointer');

        let check = !$(this).find('input.chk-service').prop('checked');
        $(this).find('input.chk-service').prop('checked', check);

        checkIfCheckService($(this).find('input.chk-service').prop('checked'));
    });

     $('.chk-service').on('change', function() {
        checkIfCheckService(this.checked);
    });

    // $('#toggle-live').on('change.bootstrapSwitch', function(e) {
    //     console.log(e.target.checked);
    // });
    // $("#toggle-live").bootstrapSwitch({
    //     'size': 'mini',
    //     'onSwitchChange': function(event, state){
    //         console.log('switched...')
    //     },
    //     'AnotherName':'AnotherValue'
    // });

});

function terms_change(checkbox){
    //If it is checked.
    if(checkbox.checked){
        alert('Checkbox has been ticked!');
    }
    //If it has been unchecked.
    else{
        alert('Checkbox has been unticked!');
    }
}

function checkIfCheck(check) {
    let numberOfChecked = $('input.chk-list:checkbox:checked').length;
    let totalCheckboxes = $('input.chk-list:checkbox').length;
    let numberNotChecked = totalCheckboxes - numberOfChecked;

    if(check) {
        $('.menus-2').show();
        $('.menus-1').hide();

        if (totalCheckboxes === numberOfChecked) {
            $('#chk-all').prop( "checked", true);
        }
    } else {
        if (totalCheckboxes === numberNotChecked) {
            $('#chk-all').prop( "checked", false );
            $('.menus-2').hide();
            $('.menus-1').show();
        }

        if (totalCheckboxes !== numberOfChecked) {
            $('#chk-all').prop( "checked", false);
        }
    }
}

function checkIfCheckService(check) {
    let numberOfChecked = $('input.chk-service:checkbox:checked').length;
    let totalCheckboxes = $('input.chk-service:checkbox').length;
    let numberNotChecked = totalCheckboxes - numberOfChecked;

    if(check) {
        $('.service-list').hide();
        $('#serve-lists').show();

        if (totalCheckboxes === numberOfChecked) {
            $('#chk-all-service').prop( "checked", true);
        }
    } else {
        if (totalCheckboxes === numberNotChecked) {
            $('#chk-all-service').prop( "checked", false );

            $('.service-list').show();
            $('#serve-lists').hide();
        }

        if (totalCheckboxes !== numberOfChecked) {
            $('#chk-all-service').prop( "checked", false);
        }
    }
}

function previewScreen(bool) {
    $('#preview_screen').show();
    if (bool) {

        $('#default-prev').show();
        $('#play-view').hide();
        // $('#toggle-live').attr('Disabled');
        console.log( $('#toggle-live'));
    } else {
        $('#default-prev').hide();
        $('#play-view').show();
        // $('#toggle-live').removeAttribute('Disabled');
    }
}

function getSongList() {
    let data_array = ["Unod Bukog", "Mr. Swabe", "Dayang-dayang", "Tambay", "7 years old", "Lol", "Unod Bukog", "Mr. Swabe", "Dayang-dayang", "Tambay", "7 years old", "Lol", "Unod Bukog", "Mr. Swabe", "Dayang-dayang", "Tambay", "7 years old", "Lol"];
    let html = "";

    if (data_array.length > 0) {
         _.forEach(data_array, function (value, key) {
            html += ' <tr class="table-row d-flex list-songs">' +
                '<td class="align-content-center col-2">' +
                '<label class="chk-container">' +
                '<input type="checkbox" class="chk-list" id="chk-list-'+key+'">' +
                '<span class="checkmark"></span>' +
                '</label>' +
                '</td>' +
                '<td class="col-10">'+value+'</td>' +
                '</tr>';
        });
    } else {
        html = '<p class="border-bottom-0 text-center text-white border-top border-secondary">No List Found.</p>';
    }

    $('#list_table').html(html);
}

function getServiceLists() {
    let data_array = ["Unod Bukog", "Mr. Swabe", "Dayang-dayang", "Tambay", "7 years old", "Lol"];
    let html = "";
    if (data_array.length > 0) {
        _.forEach(data_array, function (value, key) {
            html += '<li class="list-group-item list-service border-left-0 border-right-0 border-secondary" data-key="'+key+'">' +
                '<label class="chk-container">' +
                '<input type="checkbox" class="chk-service" id="chk-service-'+key+'">' +
                '<span class="checkmark"></span>'
                +value+
                '</li>';
        });
    } else {
        html = '<p class="border-bottom-0 text-center text-white border-top border-secondary">No List Found.</p>';
        $('#btn-present').prop('disabled', true);
    }

    $('#list_tab').html(html);
}

function getDataLists() {
    let json_array = [
        {
            "title"  : "Señorita",
            "author" :  "Shawn Mendes, Camila Cabello",
            "lyrics" : {
                0: "I love it when you call me señorita <br> I wish I could pretend I didn't need ya <br> But every touch is ooh la la la",
                1: "It's true, la la la <br> Ooh, I should be running <br> Ooh, you keep me coming for you",
                2: "Land in Miami <br> The air was hot from summer rain <br> Sweat dripping off me <br> Before I even knew her name, la la la",
                3: "It felt like ooh la la la <br> Yeah no <br> Sapphire moonlight <br> We danced for hours in the sand",
                4: "Tequila sunrise <br> Her body fit right in my hands, la la la <br> It felt like ooh la la la, yeah"
            }
        }
    ];

    let html = "";

    if (json_array.length > 0) {
         _.forEach(json_array, function(value) {
            let count = 1;
            _.forEach(value.lyrics, function (val) {
                html +=
                    '<div class="container-mg-lists">' +
                    '<div class="card border-secondary" id="card">' +
                    '<b class="card-header text-left btn-color text-white">Slide' +
                    count++ +
                    '</b>' +
                    '<div class="card-body pointer data_lists default-color">' +
                    '<blockquote class="">' +
                    '<p class="text-view text-light" data="'+val+'">'+val+'</p>' +
                    '</blockquote>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            });
        });
    } else {
        html = '<p class="border-bottom-0 text-center text-white border-secondary">No List Found.</p>';
    }


    $('#list_data').html(html);
}

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

$('#list_table tbody tr').on('click', function () {
    $(this).addClass('uniColor').siblings().removeClass('uniColor');
});

$('#appendText').on('click', function (e) {
    e.preventDefault();
    let length = $('textarea#message-text').length;
    let list = "list-" + length;
    let html = '<div class="form-group" id='+list+'>' +
        '<textarea class="form-control lyrics" id="message-text" placeholder="Enter Lyrics" required></textarea>' +
        '</div>';

    $('#lyrics_list').append(html);
    $('#removeText').css("display", length > 0 ? "inline" : "none");
});

$('#removeText').on('click', function (e) {
    e.preventDefault();
    let length = $('textarea#message-text').length - 1;
    $('#lyrics_list').find('div#list-'+ length).remove();
    $('#removeText').css("display", length > 1 ? "inline" : "none");
});

$('#saveSong').on('submit', function (e) {
    e.preventDefault();
    let title = $('#title-name').val();
    let author = $('#author-name').val();
    let length = $('textarea#message-text');

    let lyrics_arr = [];

    _.forEach(length, function (val, key) {
        lyrics_arr += " \r\n" + $('#list-'+key).find('textarea').val() + "\r\n<->";
    });

    let data =
        '\r Title : ' + title + ' \r\n ' +
        'Author: ' + author + ' \r\n ' +
        'Lyrics: ' + lyrics_arr.trim();

    const textToBLOB = new Blob([data], { type: 'text/plain' });
    const sFileName = title+ '.txt';	   // The file to save the data.

    let newLink = document.createElement("a");
    newLink.download = sFileName;

    console.log(textToBLOB);

    $.ajax({
        url:"{{ route('ajaxupload.action') }}",
        method:"POST",
        data:textToBLOB,
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        encode  : true,
        success:function(data)
        {
            console.log(data)
        }
    });

    // if (window.webkitURL != null) {
    //     newLink.href = window.webkitURL.createObjectURL(textToBLOB);
    // }
    // else {
    //     newLink.href = window.URL.createObjectURL(textToBLOB);
    //     newLink.style.display = "none";
    //     document.body.appendChild(newLink);
    // }
    //
    // newLink.click();

});



// function myFunction() {
//      if (video.paused) {
//        video.play();
//        btn.innerHTML = "Pause";
//      } else {
//        video.pause();
//        btn.innerHTML = "Play";
//      }
// }


