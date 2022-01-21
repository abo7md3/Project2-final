/*==================== SHOW NAVBAR ====================*/
const showMenu = (headerToggle, navbarId) => {
    const toggleBtn = document.getElementById(headerToggle),
        nav = document.getElementById(navbarId)

    // Validate that variables exist
    if (headerToggle && navbarId) {
        toggleBtn.addEventListener('click', () => {
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
                // change icon
            toggleBtn.classList.toggle('bx-x')
        })
    }
}
showMenu('header-toggle', 'navbar')

/*==================== LINK ACTIVE ====================*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink() {
    linkColor.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))

const open_sidebar = () => {
    event.preventDefault();
    document.getElementById("overlay").style.display = "block";
    setTimeout(() => { document.getElementById("sidebar").style.transform = "translateX(0px)"; }, 100)
    setTimeout(() => { document.getElementById("overlay").style.opacity = "0.4"; }, 50);
    document.getElementsByTagName("body")[0].classList.add("stopScroll");
}

const close_sidebar = () => {
    document.getElementById("sidebar").style.transform = "translateX(290px)";
    document.getElementById("overlay").style.opacity = "0";
    setTimeout(() => { document.getElementById("overlay").style.display = "none" }, 400);
    document.getElementsByTagName("body")[0].classList.remove("stopScroll");
}



function golight() {
    DARK_THEME.remove();
    CURRENT_THEME = 'light';
    $.ajax({
        type: "POST",
        url: '/api/settheme',
        data: {
            theme: 'light',
        },
        success: function(response) {},
    });
}

function goDark() {
    HEAD.appendChild(DARK_THEME);
    CURRENT_THEME = 'dark';
    $.ajax({
        type: "POST",
        url: '/api/settheme',
        data: {
            theme: 'dark',
        },
        success: function(response) {},
    });
}


const wrapper = document.querySelector('.wrapper');
wrapper.addEventListener('change', function(e) {
    if (e.target.checked) {
        toggleTheme()
    } else {
        toggleTheme()
    }
})

function toggleTheme() {
    if (CURRENT_THEME == 'light') {
        goDark();
    } else {
        golight();
    }
}
var isEMPTY = true;
const generateHTML = (name, section, hash) => {

    // return `<a href="${DOCTOR_REVIEW_URL}/${id}" class="search-result" style="height:70px"> 
    //     <div class="search-icon">
    //     <div>
    //     <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
    //     </div>
    //     </div>
    //     <div class="search-name">
    //     ${name}
    //     </div>
    //     <div class="search-division">
    //     |
    //     </div>
    //     <div class="search-section">
    //     ${section}
    //     </div>
    //     </a>`;

    var a = document.createElement('a');
    a.href = `${DOCTOR_REVIEW_URL}/${hash}`;
    a.classList.add("search-result");
    a.style.height = '70px';

    a.innerHTML = `<div class="search-icon">
        <div>
        <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </div>
        </div>
        <div class="search-name">
        ${name}
        </div>
        <div class="search-division">
        |
        </div>
        <div class="search-section">
        ${section}
        </div>`;

    return a;

}

const noNameHTML = () => {

    return `
    <div id="searchResult" class="search-result-main-container"><a href="review.php" class="search-result"> 
        <div class="search-icon">
        <div>
        <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </div>
        </div>
        <div class="search-name">
        لا يوجد احد بهذا الاسم
        </div>
        </a>
        </div>`;

}

var currentRequest = null;

var typingTimer; //timer identifier
var doneTypingInterval = 100; //time in ms, 5 second for example
var $input = $('#searchInput');

//on keyup, start the countdown
$input.on('keyup', function() {
    if ($input.val().length > 0) {
        isEMPTY = false;
        fetchSearchData($input.val());
    } else {
        isEMPTY = true;
        var searchResult = document.getElementById("searchResult");
        if (searchResult) {
            searchResult.remove();
        }
        document.getElementById("formCont").classList.remove("onSearchCSS");
    }
    //   clearTimeout(typingTimer);
    //   typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$input.on('keydown', function() {
    clearTimeout(typingTimer);
});

//user is "finished typing," do something
function doneTyping() {
    //do something
    fetchSearchData($input.val());
}

function fetchSearchData(nameInput) {
    const name = nameInput.trim();
    // console.log('name = '+nameInput);
    // console.log('length = '+name.length);
    // console.log("################");
    if (name.length > 0) {
        currentRequest = $.ajax({
            type: "POST",
            url: '/api/searchbyname',
            data: {
                'name': nameInput,
            },
            // beforeSend : function()    {           
            //     if(currentRequest != null) {
            //         currentRequest.abort();
            //     }
            // },
            success: function(response) {
                displaySearch(response, nameInput, name);
            },
        });



        // fetch(SEARCH_BY_NAME_URL, {
        //     method: 'POST',
        //     body: new URLSearchParams('name=' + name)
        // })
        //     .then(doctor => doctor.json())
        //     .then(doctor => displaySearch(doctor, nameInput, name))
        //     .catch(e => console.error('ERROR: ' + e))
    } else {
        currentRequest.abort();
        var searchResult = document.getElementById("searchResult");
        if (searchResult != null) {
            searchResult.remove();
            document.getElementById("formCont").classList.remove("onSearchCSS");
        }


        if (nameInput.length == 0) {
            searchResult.remove();
            document.getElementById("formCont").classList.remove("onSearchCSS");
        } else {
            document.getElementById("formCont").classList.add("onSearchCSS");
            var html = `<div id="searchResult" class="search-result-main-container"><a class="search-result"> 
                <div class="search-icon">
                <div>
                <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                </div>
                <div class="search-name">
                لا يوجد احد بهذا الاسم
                </div>
                </a>
                </div>`;
            $("#searchFrom").after(html);
        }


    }



}



function displaySearch(response, nameInput, name) {

    if (!isEMPTY) {
        var doctor = response.result;
        var searchResult = document.getElementById("searchResult");
        if (searchResult != null && doctor.length == 0) {
            document.getElementById("formCont").classList.add("onSearchCSS");
            searchResult.remove();
            var html = `
            <div id="searchResult" class="search-result-main-container">
                <div class="search-result"> 
                    <div class="search-icon">
                        <div>
                            <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </div>
                    </div>
                    <div class="search-name">
                        لا يوجد احد بهذا الاسم
                    </div>
                    <a class="add-doctor-btn-container" href="/doctor/add">
                        <div>
                            اضف محاضر +
                        </div>
                    </a>
                </div>
            </div>`;
            $("#searchFrom").after(html);
        } else {

            if (searchResult != null) {
                searchResult.remove();
            }

            document.getElementById("formCont").classList.add("onSearchCSS");

            $("#searchFrom").after('<div id="searchResult" class="search-result-main-container"></div>');
            var result_container = document.getElementById('searchResult');

            var fragment = document.createDocumentFragment();

            for (var i = 0; i < doctor.length; i++) {
                html = generateHTML(doctor[i].name, doctor[i].section_name, doctor[i].hash);
                fragment.appendChild(html)
            }

            result_container.appendChild(fragment.cloneNode(true));
        }
    }
    // if (!isEMPTY) {
    //     var doctor = response.result;
    //     if (doctor.length == 0) {
    //         var searchResult = document.getElementById("searchResult");
    //         if (searchResult != null) {
    //             document.getElementById("formCont").classList.add("onSearchCSS");
    //             searchResult.remove();
    //             var html = `<div id="searchResult" class="search-result-main-container"><a class="search-result"> 
    //                         <div class="search-icon">
    //                         <div>
    //                         <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
    //                         </div>
    //                         </div>
    //                         <div class="search-name">
    //                         لا يوجد احد بهذا الاسم
    //                         </div>
    //                         </a>
    //                         </div>`;
    //             $("#searchFrom").after(html);
    //         } else {
    //             document.getElementById("formCont").classList.add("onSearchCSS");
    //             var html = `<div id="searchResult" class="search-result-main-container"><a class="search-result"> 
    //             <div class="search-icon">
    //             <div>
    //             <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
    //             </div>
    //             </div>
    //             <div class="search-name">
    //             لا يوجد احد بهذا الاسم
    //             </div>
    //             </a>
    //             </div>`;
    //             $("#searchFrom").after(html);
    //         }
    //     } else {
    //         var searchResult = document.getElementById("searchResult");
    //         if (searchResult != null) {
    //             console.log('1')
    //             searchResult.remove();
    //             document.getElementById("formCont").classList.remove("onSearchCSS");
    //         } else {
    //             console.log('2')
    //             document.getElementById("formCont").classList.add("onSearchCSS");
    //             $("#searchFrom").after('<div id="searchResult" class="search-result-main-container"></div>');
    //             var result_container = document.getElementById('searchResult');
    //             for (var i = 0; i < doctor.length; i++) {
    //                 html = generateHTML(doctor[i].name, doctor[i].section_name, doctor[i].id);
    //                 result_container.appendChild(html)
    //             }
    //             // html = '<div id="searchResult" class="search-result-main-container">';
    //             // for (var i = 0; i < doctor.length; i++) {
    //             //     html = html + generateHTML(doctor[i].name, doctor[i].section_name, doctor[i].id);
    //             // }
    //             // html = html + "</div>";
    //             // $("#searchFrom").after(html);
    //         }
    //     }
    // } else {
    //     var searchResult = document.getElementById("searchResult");
    //     if (searchResult) {
    //         searchResult.remove();
    //     }
    //     document.getElementById("formCont").classList.remove("onSearchCSS");
    // }


}


// document.getElementById("searchInput").addEventListener('focus',function(){
//     console.log("Hi");
//     document.getElementById("formCont").classList.add('onSearchCSS')
//     document.getElementById("bg-close-div").style.display = "block";
// })


// document.getElementById("bg-close-div").addEventListener('click',function(){
//     document.getElementById("formCont").classList.remove('onSearchCSS')
//     document.getElementById("bg-close-div").style.display = "none";
// })

var currentFILTER = '';

function searchPage(query) {
    var cards = document.getElementsByClassName("main-card-dr");
    var found = false;

    var empty = document.getElementById('empty_result');

    if (empty) {
        empty.remove();
    }
    for (var i = 0; i < cards.length; i++) {
        if (cards[i].innerHTML.includes(query) && cards[i].innerHTML.includes(currentFILTER)) {
            cards[i].style.display = 'block';
            found = true;
        } else {
            cards[i].style.display = 'none';
        }
    }





    if (!found) {
        var filters_cont = document.getElementById('filters-cont');
        var searchlist_cont = document.getElementById('searchlist-cont');
        if (searchlist_cont) {
            $("#searchlist-cont").after(`
            <div id="empty_result" class="empty_result">
                    لا يوحد نتائج
            </div>
        `);
        } else {
            if (filters_cont) {
                $("#filters-cont").after(`
                    <div id="empty_result" class="empty_result">
                            لا يوحد نتائج
                    </div>
                `);
            } else {
                $("#formCont").after(`
                    <div id="empty_result" class="empty_result">
                            لا يوحد نتائج
                    </div>
                `);
            }
        }

    }


}


function hideSearchResult() {

    // if(document.getElementById('cancelSearch').style.opacity == "1"){
    var searchResult = document.getElementById("searchResult");
    if (searchResult != null) {
        searchResult.remove();
        $input.val('');
        document.getElementById("formCont").classList.remove("onSearchCSS");
    }
    // }
}

function filter(e) {
    var section = e.innerText;
    var filterCont = document.getElementById('filters-cont');
    var activeFilter = filterCont.getElementsByClassName('active');
    for (var i = 0; i < activeFilter.length; i++) {
        activeFilter[i].classList.remove('active');
    }
    e.classList.add('active');
    if (section == 'الكل') {
        currentFILTER = '';
        searchPage('');
    } else {
        currentFILTER = section;
        searchPage(section);
    }
}


function getCollegesByTypeId(id, lable_name, e) {
    if (id != 4) {
        document.getElementById('section_input').value = '';
        document.getElementById('collage').value = '';

        removeSelected("collegeTypesNames");
        e.classList.add('selected')
        disableBTN();
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
    } else {
        var colleges = document.getElementById('collegesNames');
        var sections = document.getElementById('sectionsNames');
        colleges.innerHTML = '';
        sections.innerHTML = '';
        document.getElementById('section_input').value = 144;
        document.getElementById('collage').value = 41;
        document.getElementById('collage_type').value = 4;
        removeSelected("collegeTypesNames");
        e.classList.add('selected')
        enableBTN();
    }
}

function getSectionsByCollegeId(id, lable_name, e) {
    removeSelected("collegesNames");
    e.classList.add('selected')
    disableBTN();
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

    document.getElementById('collage').value = id;
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
        gender: document.getElementById('gender').value,
        name: document.getElementById('name').value,
    }
    if (inputs.gender) {
        if (inputs.section) {
            if (inputs.name.length > 0) {
                var btn = document.getElementById('submitBTN');
                btn.disabled = false;
                btn.classList.remove('disabled')
            } else {
                disableBTN();
            }
        } else {
            disableBTN();
        }
    } else {
        disableBTN();
    }
}

function disableBTN() {
    var btn = document.getElementById('submitBTN');
    btn.disabled = true;
    btn.classList.add('disabled')
}

function name_change() {
    enableBTN();
}


document.addEventListener('DOMContentLoaded', function() {
    var btn = document.querySelector('.button'),
        loader = document.querySelector('.loader'),
        check = document.querySelector('.check');

    btn.addEventListener('click', function() {
        loader.classList.add('active');
    });

    loader.addEventListener('animationend', function() {
        check.classList.add('active');
    });
});

var currentindex = 0;

function addInput() {
    var lastinput = document.getElementById('input' + currentindex);
    if (lastinput.value != '') {
        var container = document.getElementById('inputcontainer');
        var newinput = document.createElement('input');
        currentindex++;
        newinput.type = "text";
        newinput.name = 'input' + currentindex;
        newinput.id = 'input' + currentindex;
        newinput.onkeyup = addInput;
        container.appendChild(newinput);
    }
}

const open_sidebar = () => {
    Event.preventDefault();
    document.getElementById("overlay").style.display = "block";
    setTimeout(() => { document.getElementById("sidebar").style.transform = "translateX(0px)"; }, 100)
    setTimeout(() => { document.getElementById("overlay").style.opacity = "0.4"; }, 50);
    document.getElementsByTagName("body")[0].classList.add("stopScroll");
}

const close_sidebar = () => {
        document.getElementById("sidebar").style.transform = "translateX(290px)";
        document.getElementById("overlay").style.opacity = "0";
        setTimeout(() => { document.getElementById("overlay").style.display = "none" }, 400);
        document.getElementsByTagName("body")[0].classList.remove("stopScroll");
    }
    // array for header.
var arrHead = <?php echo json_encode($userinfo)?>;
// first create TABLE structure with the headers. 
function createTable() {
    var empTable = document.createElement('table');
    empTable.setAttribute('id', 'empTable'); // table id.

    var tr = empTable.insertRow(-1);
    for (var h = 0; h < arrHead.length; h++) {
        var th = document.createElement('th');
        if (h == 0) {
            arrHead.unshift("", "ID");



        }
        // create table headers
        th.innerHTML = arrHead[h];
        tr.appendChild(th);
    }

    var div = document.getElementById('cont');
    div.appendChild(empTable); // add the TABLE to the container.
}

// now, add a new to the TABLE.
function addRow() {
    var empTab = document.getElementById('empTable');

    var rowCnt = empTab.rows.length; // table row count.
    var tr = empTab.insertRow(rowCnt); // the table row.
    tr = empTab.insertRow(rowCnt);

    for (var c = 0; c < arrHead.length; c++) {
        var td = document.createElement('td'); // table definition.
        td = tr.insertCell(c);

        if (c == 0) { // the first column.
            // add a button in every new row in the first column.
            var button = document.createElement('input');

            // set input attributes.
            button.setAttribute('type', 'button');
            button.setAttribute('value', 'Remove');

            // add button's 'onclick' event.
            button.setAttribute('onclick', 'removeRow(this)');

            td.appendChild(button);
        } else {
            // 2nd, 3rd and 4th column, will have textbox.
            var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('value', '');

            td.appendChild(ele);
        }
    }
}

// delete TABLE row function.
function removeRow(oButton) {
    var empTab = document.getElementById('empTable');
    empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); // button -> td -> tr.
}

// function to extract and submit table data.
function submit() {
    var myTab = document.getElementById('empTable');
    var arrValues = new Array();

    // loop through each row of the table.
    for (row = 1; row < myTab.rows.length - 1; row++) {
        // loop through each cell in a row.
        for (c = 0; c < myTab.rows[row].cells.length; c++) {
            var element = myTab.rows.item(row).cells[c];
            if (element.childNodes[0].getAttribute('type') == 'text') {
                arrValues.push("'" + element.childNodes[0].value + "'");
            }
        }
    }

    // The final output.
    document.getElementById('output').innerHTML = arrValues;
}