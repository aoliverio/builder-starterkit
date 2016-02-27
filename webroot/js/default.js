/**
 * This function is used to load dependency file
 * 
 * @param {type} filename
 * @param {type} filetype
 * @returns {undefined}
 */
function loadFile(filename, filetype) {
    if (filetype === "js") { //if filename is a external JavaScript file
        var fileref = document.createElement('script');
        fileref.setAttribute("type", "text/javascript");
        fileref.setAttribute("src", filename);
    }
    else if (filetype === "css") { //if filename is an external CSS file
        var fileref = document.createElement("link");
        fileref.setAttribute("rel", "stylesheet");
        fileref.setAttribute("type", "text/css");
        fileref.setAttribute("href", filename);
    }
    if (typeof fileref !== "undefined")
        document.getElementsByTagName("head")[0].appendChild(fileref);
}

/**
 * Custom setting for this Theme
 * 
 * @param {type} param
 */
$(document).ready(function () {

    /**
     * Changes default for the modal plugin's 'keyboard' option to false
     */
    $.fn.modal.Constructor.DEFAULTS.keyboard = false;

    /**
     * Set default for dataTable object 
     */
    $('.dataTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Italian.json"
        }
    });
});

        