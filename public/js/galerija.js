
// let data = {};

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.post("/galerija",
    function(data){
        // console.log(data);
        // data = JSON.parse(data);
        // console.log(data);

        document.getElementById("addImage").innerHTML = data;


    });
