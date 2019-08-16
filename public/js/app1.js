
$(document).ready(function (e) {
    getTitles();
    getDataLists();

    $( ".data_lists" ).click(function() {
        // alert($(this).find('p').text());
        // $('#preview_lists').fadeToggle("slow");
        $('#preview_lists').text($(this).find('p').text()).fadeIn();
    });
});

function getTitles() {
    $data_array = ["Unod Bukog", "Mr. Swabe", "Dayang-dayang", "Tambay", "7 years old", "Lol"];
    let html = "";
    _.forEach($data_array, function (value) {
        html += ' <tr class="table-row"data-href="http://tutorialsplane.com">' +
            '<td class="align-content-center">' +
            '<div class="form-check">' +
            '<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">' +
            '</div>' +
            '</td>' +
            '<td>'+value+'</td>' +
            '</tr>';
    });
    $('#list_table').html(html);
}

function getDataLists() {
    $data_array = ["Hey", "Lol", "Lala", "Wews", "Haha", "Whoo"];
    let html = "";
    _.forEach($data_array, function(value) {
        html += '<div class="col-3 bot-25px">' +
            '<div class="container">' +
            '<div class="row border border-secondary pointer hw-output data_lists">' +
            '<p class="content">'+value+'</p>' +
            '</div>' +
            '</div>' +
            '</div>';
    });
    $('#list_data').html(html);
}

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

$('#list_table tbody tr').on('click', function () {
    $(this).addClass('uniColor').siblings().removeClass('uniColor');
});

// $('.data_lists').on('click', function (e) {
//    e.preventDefault();
//    console.log("wew");
//    // $(this).text();
//    // console.log($(this));
//    // console.log($(this).text());
// });