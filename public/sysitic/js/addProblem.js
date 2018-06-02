$(document).ready(function() {
    loadingProblemTypes();
    listTypes();
});

function loadingProblemTypes() {
    var problemTypes = $('#problemType');
    var route = baseURL + '/types/list';

    $.get(route, function(res) {
        $(res).each(function(key, value) {
            problemTypes.append('<option value="' +
                value.id + '">' +
                value.name + '</option>');
        });
    });
}

function listTypes() {
    var listTypes = $('#listTypes');
    var route = baseURL + '/types/list';

    $.get(route, function(res) {
        $(res).each(function(key, value) {
            listTypes.append('<option value="' +
                value.id + '">' +
                value.name + '</option>');
        });
    });
}