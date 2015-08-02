function Vote(id, rating) {
    var _id = $("<input>").attr("type", "hidden").attr("name", "id").val(id);
    var _rating = $("<input>").attr("type", "hidden").attr("name", "rating").val(rating);

    $('#bobForm').append($(_id));
    $('#bobForm').append($(_rating));

    var form = document.getElementById("bobForm");
    form.submit();
}
