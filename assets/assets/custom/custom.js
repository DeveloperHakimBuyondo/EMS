photo.onchange = evt => {
    const [file] = photo.files;
        if(file){
            blah.src = URL.createObjectURL(file);
        }
}
// Show Image within a form before upload