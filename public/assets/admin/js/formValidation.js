$(document).ready(function() {
    // brandAddFormValidation
    $('.brandValidation').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var _token = $('input[name="_token"]').val();
        var brandName = document.forms["brandAddForm"]["name"].value;
        var letters = /[0-9a-zA-Z]+$/;
        if (brandName == '') {
        document.getElementById('name').classList.add('is-invalid')
        document.getElementById('nameMessage').innerHTML = " Brand Name is Mendotary"
        return false;
        } else if (brandName.length >= 50) {
        document.getElementById('name').classList.add('is-invalid')
        document.getElementById('nameMessage').innerHTML = " Brand Name Maximum length is 50"
        return false;
        } else if (!brandName.match(letters)) {
        document.getElementById('name').classList.add('is-invalid')
        document.getElementById('nameMessage').innerHTML = "  Brand name can only allow alphanumeric characters"
        return false;
        }
        document.getElementById('name').classList.add('is-valid')
         if (name) {
            $.ajax({
                url: "/admin/brand-check",
                method: "POST",
                data: {
                    name: name,
                    _token: _token
                },
                success: function(brand) {
                    if(brand > 0)
                    {

                        document.getElementById('name').classList.add('is-invalid')
                        document.getElementById('nameMessage').innerHTML = " Duplicate brand name will not be allowed"
                        return false;
                    }
                    else
                    {
                       e.currentTarget.submit();
                        return true;
                    }
                },
            })
        }
    });
    // modelAddFormValidation
    $('.modelValidation').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var brand_id = document.forms["modelAddForm"]["brand_id"].value;
        var model = document.forms["modelAddForm"]["name"].value;
        var _token = $('input[name="_token"]').val();
        var letters = /[0-9a-zA-Z]+$/;
        if (brand_id == '') {
            document.getElementById('brand_id').classList.add('is-invalid')
            document.getElementById('brandMessage').innerHTML = " Brand Name is Mendotary"
            return false;
         } else if (model == '') {
            document.getElementById('name').classList.add('is-invalid')
            document.getElementById('modelMessage').innerHTML = " Model Name is Mendotary"
            return false;
         } else if (model.length >= 100) {
            document.getElementById('name').classList.add('is-invalid')
            document.getElementById('modelMessage').innerHTML = " Maximum length of Model Name is 100"
            return false;
         } else if (!model.match(letters)) {
            document.getElementById('name').classList.add('is-invalid')
            document.getElementById('modelMessage').innerHTML = " Model name can only allow alphanumeric characters"
            return false;
         }
            document.getElementById('name').classList.add('is-valid')
         if (name) {
            $.ajax({
                url: "/admin/model-check",
                method: "POST",
                data: {
                    brand_id: brand_id,
                    name: name,
                    _token: _token
                },
                success: function(model) {
                    if(model > 0)
                    {
                        document.getElementById('name').classList.add('is-invalid')
                        document.getElementById('modelMessage').innerHTML = " Duplicate model name of same brand will not be allowed "
                        return false;
                    }
                    else
                    {
                       e.currentTarget.submit();
                        return true;
                    }
                },
            })
        }
    });
    // itemAddFormValidation
    $('.itemValidation').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var brand_id = document.forms["itemAddForm"]["brand_id"].value;
        var model_id = document.forms["itemAddForm"]["model_id"].value;
        var item = document.forms["itemAddForm"]["name"].value;
        var description = document.forms["itemAddForm"]["description"].value;
        var _token = $('input[name="_token"]').val();
        var letters = /[0-9a-zA-Z]+$/;
        if (brand_id == '') {
            document.getElementById('brand_id').classList.add('is-invalid')
            document.getElementById('brandMessage').innerHTML = " Project Name is Mendotary"
            return false;
         } else if (model_id == '') {
            document.getElementById('model_id').classList.add('is-invalid')
            document.getElementById('modelMessage').innerHTML = " User Name is Mendotary"
            return false;
         }
         else if (item == '') {
            document.getElementById('name').classList.add('is-invalid')
            document.getElementById('itemMessage').innerHTML = " Todo Name is Mendotary"
            return false;
         }
         else if (description == '') {
            document.getElementById('description').classList.add('is-invalid')
            document.getElementById('descriptionMessage').innerHTML = " Description is Mendotary"
            return false;
         }
        else if (item.length >= 250) {
            document.getElementById('name').classList.add('is-invalid')
            document.getElementById('itemMessage').innerHTML = " Maximum length of Item Name is 250"
            return false;
         } else if (!item.match(letters)) {
            document.getElementById('name').classList.add('is-invalid')
            document.getElementById('itemMessage').innerHTML = " Item name can only allow alphanumeric characters"
            return false;
         }
            document.getElementById('name').classList.add('is-valid')
         if (name) {
            $.ajax({
                url: "/admin/item-check",
                method: "POST",
                data: {
                    brand_id: brand_id,
                    model_id: model_id,
                    name: name,
                    _token: _token
                },
                success: function(item) {
                    console.log(item)
                    if(item > 0)
                    {
                        document.getElementById('name').classList.add('is-invalid')
                        document.getElementById('itemMessage').innerHTML = " Duplicate item name of same brand and model will not be allowed  "
                        return false;
                    }
                    else
                    {
                       e.currentTarget.submit();
                        return true;
                    }
                },
            })
        }
    });
});
    