var notes = document.querySelectorAll(".important, .utile, .aucun_type");

notes.forEach(function (note) {
    var btn = document.getElementById("btn_" + note.id);
    var btn2 = document.getElementById("btn2_" + note.id);
    var modalsDelete = document.getElementById("delete_" + note.id);
    var modalsEdit = document.getElementById("edit_" + note.id);
    var spans = document.getElementsByClassName("close");

    note.addEventListener('click', function (event) {
        var noteId = note.id;
        console.log("Note sélectionnée " + noteId);
        btn.classList.toggle('none');
        btn2.classList.toggle('none');

        note.classList.toggle('noteSelected');
        
    });

    if (btn) {
        btn.addEventListener('click', function (event) {
            console.log(btn);
            modalsDelete.style.display = "block";
            for (var i = 0; i < spans.length; i++) {
                spans[i].onclick = function(index) {
                  return function() {
                    modalsDelete.style.display = "none";
                  }
                }(i);
              }
        });
    }

    if (btn2) {
        btn2.addEventListener('click', function (event) {
            modalsEdit.style.display = "block";
            for (var i = 0; i < spans.length; i++) {
                spans[i].onclick = function(index) {
                  return function() {
                    modalsEdit.style.display = "none";
                  }
                }(i);
              }
        });
    }
});
