<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Client-side</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="container">
        <button class='btn btn-primary' id="show-create-image-modal" data-bs-toggle="modal" data-bs-target="#createImageModal" >Create Image</button>
            <table id="images" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Alt</th>
                        <th>Image</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
            <div class="button-container">
            </div>

            <table class="template d-none">
                <tr>
                    <td class="col-image-id"></td>
                    <td class="col-image-title"></td>
                    <td class="col-image-alt"></td>
                    <td class="col-image-url"></td>
                    <td class="col-image-description"></td>
                    <td>
                        <button class="btn btn-danger delete-image" type="submit" data-imageid="">DELETE</button>
                        <button type="button" class="btn btn-primary show-image" data-bs-toggle="modal"
                            data-bs-target="#showImageModal" data-imageid="">Show</button>
                        <button type="button" class="btn btn-secondary edit-image" data-bs-toggle="modal"
                            data-bs-target="#editImageModal" data-imageid="">Edit</button>
                    </td>
                </tr>
            </table>

        </div>    

        <div class="modal fade" id="createImageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create Modal</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="ajaxForm">
                    <div class="form-group">
                        <label for="image_title">Image Title</label>
                        <input id="image_title" class="form-control create-input" type="text" name="image_title" />
                 
                      </div>
                    <div class="form-group">
                        <label for="image_alt">Image Alt</label>
                        <input id="image_alt" class="form-control create-input" type="text" name="image_alt" />
                     
                    </div>
                    <div class="form-group">
                        <label for="image_url">Image URL</label>
                        <input id="image_url" class="form-control create-input" type="text" name="image_url" />
                     
                    </div>
                    <div class="form-group">
                        <label for="image_description">Image Description</label>
                        <input id="image_description" class="form-control create-input" type="text" name="image_description" />
                       
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="create-image" type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>    
        
        
          <div class="modal fade" id="editImageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Modal</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="ajaxForm">
                    <input type="hidden" id="edit_image_id" name="image_id" />
                    <div class="form-group">
                        <label for="image_title">Image Title</label>
                        <input id="edit_image_title" class="form-control" type="text" name="image_title" />
                    </div>
                    <div class="form-group">
                        <label for="image_alt">Image alt</label>
                        <input id="edit_image_alt" class="form-control" type="text" name="image_alt" />
                    </div>
                    <div class="form-group">
                        <label for="image_url">Image alt</label>
                        <input id="edit_image_url" class="form-control" type="text" name="image_url" />
                    </div>
                    <div class="form-group">
                        <label for="image_description">Image Description</label>
                        <input id="edit_image_description" class="form-control" type="text" name="image_description" />
                    </div>
            
                </div> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button id="update-image" type="button" class="btn btn-primary update-image">Update</button>
                </div>
              </div>
            </div>
          </div>
           <!-- Show -->
        <div class="modal fade" id="showImageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Show Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container">
                        <div class="row">
                            <div class="col-md-4"> Image Id
                            </div> 
                            <div class="show_image_id col-md">  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"> Image Title
                            </div> 
                            <div class="show_image_title col-md">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"> Image Alt
                            </div> 
                            <div class="show_image_alt col-md">  
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-4"> Image URL
                            </div> 
                            <div class="show_image_url col-md">  
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-4"> Image Discription
                            </div> 
                            <div class="show_image_description col-md">  
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-image-create-modal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                console.log('jquery veikia');
            })

            let csrf = '123456789';

            function createRowFromHtml(imageId, imageTitle, imageAlt, imageUrl, imageDescription) {
                $(".template tr").removeAttr("class");
                $(".template tr").addClass("image" + imageId);
                $(".template .delete-image").attr('data-imageid', imageId);
                $(".template .show-image").attr('data-imageid', imageId);
                $(".template .edit-image").attr('data-imageid', imageId);
                $(".template .col-image-id").html(imageId);
                $(".template .col-image-title").html(imageTitle);
                $(".template .col-image-alt").html(imageAlt);
                $(".template .col-image-url").html(imageUrl);
                $(".template .col-image-description").html(imageDescription);
                // $(".template .col-image-company").html(imageCompanyId);
                return $(".template tbody").html();
            }
            $(document).on('click', '.button-container button',function() {
                let page= $(this).attr('data-page');
                console.log(page);
                $.ajax({
                    type: 'GET',
                    url: page,
                    data: {csrf:csrf},
                    success: function(data) {
                        $('#images tbody').html('');
                        $('.button-container').html('');
                       $.each(data.data, function(key, image) {
                    
                           let html;
                           html = createRowFromHtml(image.id, image.title, image.alt, '<img style="width:100px;height:100px" src="'+image.url+'" />', image.description);
                           $('#images tbody').append(html);
                       });
                       $.each(data.links, function(key, link) {
                            let button;
                            if (link.url != null) {
                                if(link.active == true) {
                                    button = "<button class='btn btn-primary active type='button' data-page='"+link.url +"'>" + link.label+" </button>";
                                } else {
                                    button = "<button class='btn btn-primary' type='button' data-page='"+link.url +"'>" + link.label+" </button>";
                                }
                            }
                            $('.button-container').append(button);
                       });
                        console.log(data)
                    }
                });
            });
            $.ajax({
                    type: 'GET',
                    url: 'http://127.0.0.1:8000/api/images',
                    data: {csrf:csrf},
                    success: function(data) {
                        $.each(data.data, function(key, image) {
                    
                        let html;
                        html = createRowFromHtml(image.id, image.title, image.alt,  '<img style="width:100px;height:100px" src="'+image.url+'" />', image.description);
                        $('#images tbody').append(html);
                        });
                       console.log(data.links)
                       $.each(data.links, function(key, link) {
                            let button;
                            if (link.url != null) { 
                                if(link.active == true) {
                                    button = "<button class='btn btn-primary active' type='button' data-page='"+link.url +"'>" + link.label+" </button>";
                                }
                                else {
                                    button = "<button class='btn btn-primary' type='button' data-page='"+link.url +"'>" + link.label+" </button>";
                                }
                            }
                            $('.button-container').append(button);
                       });
                    }
            });

            $(document).on('click', '#create-image', function() {
                let image_title = $('#image_title').val();
                let image_alt = $('#image_alt').val();
                let image_url = $('#image_url').val();
                let image_description = $('#image_description').val();
                $.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/api/images',
                        data: {image_title:image_title, image_alt:image_alt,image_url:image_url, image_description:image_description },
                        success: function(data) {
                            console.log(data)
                        }
                });
                $.ajax({
                    type: 'GET',
                    url: 'http://127.0.0.1:8000/api/images',
                    data: {csrf:csrf},
                    success: function(data) {
                        $.each(data.data, function(key, image) {
                    
                        let html;
                        html = createRowFromHtml(image.id, image.title, image.alt,  '<img style="width:100px;height:100px" src="'+image.url+'" />', image.description);
                        $('#images tbody').append(html);
                        });
                       console.log(data.links)
                       $.each(data.links, function(key, link) {
                            let button;
                            if (link.url != null) { 
                                if(link.active == true) {
                                    button = "<button class='btn btn-primary active' type='button' data-page='"+link.url +"'>" + link.label+" </button>";
                                }
                                else {
                                    button = "<button class='btn btn-primary' type='button' data-page='"+link.url +"'>" + link.label+" </button>";
                                }
                            }
                            $('.button-container').append(button);
                       });
                    }
                });
            })
            // edit/update-image
            $(document).on('click', '.edit-image',function() {
                let imageid = $(this).attr('data-imageid');
                $.ajax({
                    type: 'GET',
                    url: 'http://127.0.0.1:8000/api/images/'+imageid,//
                    success: function(data) {
                        $('#edit_image_id').val(data.id);
                        $('#edit_image_title').val(data.title);
                        $('#edit_image_alt').val(data.alt);
                        $('#edit_image_url').val(data.url);
                        $('#edit_image_description').val(data.description);
                    }
                });
            });
            $(document).on('click', '#update-image',function() {
                let imageid = $('#edit_image_id').val();
                let image_title = $('#edit_image_title').val();
                let image_alt = $('#edit_image_alt').val() ;
                let image_url = $('#edit_image_url').val() ;
                let image_description = $('#edit_image_description').val() ;
                $.ajax({
                        type: 'PUT',
                        url: 'http://127.0.0.1:8000/api/images/'+imageid,//
                        data: {image_title:image_title, image_alt:image_alt,image_url:image_url, image_description:image_description },
                        success: function(data) {
                            console.log(data)
                            $(".image"+imageid+ " " + ".col-image-title").html(data.imageTitle);
                            $(".image"+imageid+ " " + ".col-image-alt").html(data.imageAlt);
                            $(".image"+imageid+ " " + ".col-image-url").html(data.imageURL);
                            $(".image"+imageid+ " " + ".col-image-description").html(data.imageDescription);
                           
                            $("#editImageModal").hide();
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                            $('body').css({overflow:'auto'});
                        }
                });
            });
            $(document).on('click', '.delete-image',function() {
                let imageid = $(this).attr('data-imageid');
                $.ajax({
                    type: 'DELETE',
                    url: 'http://127.0.0.1:8000/api/images/'+imageid,//
                    success: function(data) {
                       console.log(data)
                       $('.image'+imageid).remove();

                    }
                });
            })
            // Show
            $(document).on('click', '.show-image', function() {
                let imageid = $(this).attr('data-imageid');
                console.log(imageid);

                $.ajax({
                    type: 'GET',// formoje method POST GET
                    url: 'http://127.0.0.1:8000/api/images/'+imageid,// formoje action
                    success: function(data) {
                        console.log(data);
                        $('.show_image_id').html(data.id);
                        $('.show_image_title').html(data.title);
                        $('.show_image_alt').html(data.alt);
                        $('.show_image_url').html('<img style="width:100px;height:100px" src="'+data.url+'" />');
                        $('.show_image_description').html(data.description);                         
                    }
                });
            })

            
        </script>
    </body>
</html>