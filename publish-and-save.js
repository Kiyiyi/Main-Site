// Userscript by kaijrojo
// Lightspeed autoclick publish to ecomm
// then, save changes in the page

var checkbox = document.getElementById("view_publish_to_ecom");
var save_button = document.getElementById("saveButton");

async function publish_and_save()
{
    if (checkbox.checked == true){
        checkbox.click()
        let promise = Promise.resolve("clicked!")
    }
    let promise = Promise.resolve("finished!")
    save_button.click() = await promise;

}