function getCollegesByTypeId(id, lable_name, e) {
    if (id == 1) {
        document.getElementById('section_input').value = e;
        document.getElementById('collage').value = '';

        removeSelected("collegeTypesNames");
        e.classList.add('selected')
            // $.ajax({
            //     type: "POST",
            //     url: '/api/getCollegeByTypeId',
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     data: {
            //         'id': id,
            //     },
            //     success: function (response) {
            // for(var x = 0;x<colleges.length;x++){

        // }
        var result = []
        for (var x = 0; x < COLLEGES_DATA.length; x++) {
            if (COLLEGES_DATA[x].collegeType_id == id) {
                result.push(COLLEGES_DATA[x])
            }
        }
        document.getElementById('collage_type').value = id;
        var html = genrateCollegeHTML(lable_name, result)
        var colleges = document.getElementById('collegesNames');
        var sections = document.getElementById('sectionsNames');
        colleges.innerHTML = '';
        sections.innerHTML = '';
        colleges.innerHTML = html;
        //     },
        // });
    }
}

function getSectionsByCollegeId(id, lable_name, e) {
    removeSelected("collegesNames");
    e.classList.add('selected')
        // $.ajax({
        //     type: "POST",
        //     url: '/api/getSectionsByCollegeId',
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //     data: {
        //         'id': id,
        //     },
        //     success: function (response) {

    var result = []
    for (var x = 0; x < SECTIONS_DATA.length; x++) {
        if (SECTIONS_DATA[x].college_id == id) {
            result.push(SECTIONS_DATA[x])
        }
    }

    var html = genrateSectiosHTML(lable_name, result)
    var sections = document.getElementById('sectionsNames');
    sections.innerHTML = '';
    sections.innerHTML = html;
    //     },
    // });
}


function selectSection(e, id) {
    document.getElementById('section_input').value = id;
    removeSelected("sectionsNames");
    e.classList.add('selected');
    enableBTN();
}

function selectGender(e, gender) {
    document.getElementById('gender').value = gender;
    removeSelected('genders');
    e.classList.add('selected');
    enableBTN();
}

function genrateCollegeHTML(name, data) {
    var html = ` <label>${name}</label>
                    <div class="options noSelect">`;

    for (var i = 0; i < data.length; i++) {
        html = html + `<div onclick="getSectionsByCollegeId(${data[i].id},'${data[i].name}',this)" class="option noSelect">
                            ${data[i].name}
                        </div>`
    }
    html = html + `</div>`

    return html
}

function genrateSectiosHTML(name, data) {
    var html = ` <label>${name}</label>
                    <div class="options noSelect">`;

    for (var i = 0; i < data.length; i++) {
        html = html + `<div onclick="selectSection(this,${data[i].id})" class="option noSelect">
                            ${data[i].name}
                        </div>`
    }
    html = html + `</div>`

    return html
}

function removeSelected(id) {
    var selected_options = document.getElementById(id).getElementsByClassName('selected');
    if (selected_options) {
        for (var x = 0; x < selected_options.length; x++) {
            selected_options[x].classList.remove('selected')
        }
    }
}

function enableBTN() {
    var inputs = {
        college_type: document.getElementById('collage_type').value,
        college: document.getElementById('collage').value,
        section: document.getElementById('section_input').value,
        name: document.getElementById('name').value,
    }
    if (inputs.section) {
        if (inputs.name.length > 0) {
            var btn = document.getElementById('submitBTN');
            btn.disabled = true;
            btn.classList.remove('disabled')
        } else {
            disableBTN();
        }
    } else {
        disableBTN();
    }

}

function disableBTN() {
    var btn = document.getElementById('submitBTN');
    btn.disabled = false;
    btn.classList.add('disabled')
}

function name_change() {
    enableBTN();
}

$(function() {
    $("div").slice(0, 8).addClass('display');
    $("#loadMore").on('click', function(e) {
        e.preventDefault();
        $("div:hidden").slice(0, 8).addClass('display');
        if ($("div:hidden").length == 0) {
            $("#loadMore").remove();
        } else {
            $('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        }
    });
});