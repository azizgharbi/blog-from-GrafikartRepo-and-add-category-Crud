var attachement = document.querySelector('.editor');

if (window.tinymce) {
  tinymce.init({
  selector: '.editor',
  plugins:'image,paste',
  paste_data_images:true,
  automatic_uploads:true,

  images_upload_handler: function(blobinfo,success,failure){

        var data = new FormData();
        var mydata = {};

        data.append("attachement_id",attachement.dataset.id);
        data.append('attachement_type',attachement.dataset.type);
        data.append('name',blobinfo.blob(),blobinfo.filename());

            for (var key of data.entries()) {
                mydata[key[0]]=key[1]
            }

        axios.post(attachement.dataset.url,mydata)
        .then(function(res){
          // work in progress
        })
        .catch(function(err){
          })
      }
  });
}
