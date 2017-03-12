/*var attachement = document.querySelector('#editor');

if (window.tinymce) {
  tinymce.init({
  selector: '#editor',
  plugins:'image,paste',
  paste_data_images:true,
  automatic_uploads:true,
  images_upload_handler: function(blobinfo,success,failure){

        var data = new FormData();

        data.append("attachement_id",attachement.dataset.id);
        data.append('attachement_type',attachement.dataset.type);
        data.append('name',blobinfo.blob(), blobinfo.filename());

        axios.post(attachement.dataset.url,data)
        .then(function(res){
              success(res.data.url);
                    })
        .catch(function(err){
          })
      }

  });
}
