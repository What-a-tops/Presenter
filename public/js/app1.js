$(document).ready(function (e) {
    $('#removeText').hide();
    getTitles();
    getDataLists();

    $( ".data_lists" ).click(function() {
        $('.text-view').removeClass('text-white');
        // $('#card').removeClass('border-white');
        // $('.cheader').removeClass('text-white');
        $('#preview_lists').hide().text($(this).find('p').addClass('text-white').text()).fadeIn('slow');
        // $('#card').removeClass('border-secondary').addClass('border-white');
        // $('.cheader').removeClass('text-secondary').addClass('text-white');
    });

    $('.chk-list').on('change', function(e) {
        let numberOfChecked = $('input.chk-list:checkbox:checked').length;
        let totalCheckboxes = $('input.chk-list:checkbox').length;
        let numberNotChecked = totalCheckboxes - numberOfChecked;

        if(this.checked) {
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
    });

    $('#chk-all').on('change', function (e) {
        let length = $('input.chk-list:checkbox').length;
        for (i = 0; i < length; i++) {
            $('#chk-list-'+i).prop( "checked", !!this.checked);
            if (!this.checked) {
                $('.menus-2').hide();
                $('.menus-1').show();
            }
        }
    });
});

function getTitles() {
    $data_array = ["Unod Bukog", "Mr. Swabe", "Dayang-dayang", "Tambay", "7 years old", "Lol"];
    let html = "";
    _.forEach($data_array, function (value, key) {
        html += ' <tr class="table-row" data-href="http://tutorialsplane.com">' +
            '<td class="align-content-center">' +
            '<label class="chk-container">' +
            '<input type="checkbox" class="chk-list" id="chk-list-'+key+'">' +
            '<span class="checkmark"></span>' +
            '</label>' +
            '</td>' +
            '<td>'+value+'</td>' +
            '</tr>';
    });
    $('#list_table').html(html);
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
    _.forEach(json_array, function(value) {
        let count = 1;
        _.forEach(value.lyrics, function (val) {
            html +=
                '<div class="container">' +
                '<div class="card border-secondary" id="card">' +
                '<b class="card-header text-left btn-color text-white cheader">Slide' +
                count++ +
                '</b>' +
                '<div class="card-body pointer data_lists">' +
                '<blockquote class="blockquote mb-0">' +
                '<p class="text-view">'+val+'</p>' +
                '</blockquote>' +
                '</div>' +
                '</div>' +
                '</div>';
        });
    });
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
        lyrics_arr += " \r\n" + $('#list-'+key).find('textarea').val() + "\r\n<->";;
    });

    let data =
        '\r Title : ' + title + ' \r\n ' +
        'Author: ' + author + ' \r\n ' +
        'Lyrics: ' + lyrics_arr.trim();

    // Convert the text to BLOB.
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

