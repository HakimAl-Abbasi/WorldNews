
            // script for json file to get data
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            alert("dd");
            if (this.readyState == 4 && this.status == 200) {

            var myObj = JSON.parse(this.responseText);
            var flowers = myObj.flowers;
            var deal_data ='';
            var path ='layout/js/data.json';
            for(var i = 0; i < flowers.length;i++)
            {

            deal_data+='<div class="col-lg-4 col-md-4 ">';
            deal_data+='<div class="start">';
              deal_data+='<div class="container">';
                deal_data+='<div class="mar-start">';
              deal_data<div class="card mb-3" style="max-width: 540px;">;
                deal_data+='<div class="row no-gutters">';
                  deal_data+='<div class="col-md-4">';
                  deal_data+='<img src='"+flowers[i].image+'"class="card-img" alt="slide-show">';
                deal_data+=' </div>';
                deal_data+='<div class="col-md-8">';
                  deal_data+='<div class="card-body" >';
                  deal_data+=' <h5 class="card-title">'+flowers[i].name+'</h5>';
                    deal_data+='<p class="card-text">'+flowers[i].info+'</p>';

                  deal_data+='</div>';
                deal_data+='</div>' ;
              deal_data+='</div>' ;
          deal_data+='</div>'  ;

          deal_data+='</div>';
          deal_data+='</div>';
          deal_data+='</div>';
            deal_data+='</div>';

            }

            document.getElementById("show-data").innerHTML = deal_data;
            }
            };
            xmlhttp.open("GET",path, true);
            xmlhttp.send();
