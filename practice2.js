function change_color() {
    const border_R = 0 || document.getElementById("border_R").value;
    const border_G = 0 || document.getElementById("border_G").value;
    const border_B = 0 || document.getElementById("border_B").value;
    const border_width = 1 || document.getElementById("border_width").value;

    const background_R = 0 || document.getElementById("bg_R").value;
    const background__G = 0 || document.getElementById("bg_G").value;
    const background__B = 0 || document.getElementById("bg_B").value;

    const tag = document.getElementById("paragraph");
    tag.style.borderStyle = "solid";
    tag.style.borderColor = `rgb(${border_R}, ${border_G}, ${border_B})`;
    tag.style.borderWidth = border_width + "px";
    tag.style.backgroundColor = `rgb(${background_R}, ${background__G}, ${background__B})`;
}
