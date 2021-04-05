<!DOCTYPE html>
<html lang="en">
<head>
    <title>Craft</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{url('css/craft.css')}}" type="text/css" rel="stylesheet" />
</head>

<body>


<section>

    <article>
        <div class="body">
        <form id="addPhoto" action="" method="POST">
        <h1>Craft</h1>
        <h2>Add Photo</h2>
        <input type="file" id="photo" name="photo">
        <button type="button"  onclick='uploadCraft()' id="gig_upload_file">Choose File</button><br><br>
        <h2>Add Caption</h2>
        <input type="text" id="caption" name="caption"><br><br>
        <button type="submit"id="upload">Upload</button>
        </form>
        </div>
        
        
        <div id="svg">
            <div id="svg-1">
                <svg height="105" width="105">
                    <circle cx="50" cy="50" r="50"   />
                  </svg>
                  <br>
                  <br>
                  <svg id="center-2" height="120" width="120">
                    <circle cx="60" cy="60" r="50"  />
                  </svg>
            </div>
            <div id="svg-2">
                <svg id="center" height="100" width="100">
                    <circle cx="30" cy="30" r="20" />
                  </svg>
            </div>
            <div id="svg-3">
                <svg height="100" width="100">
                    <circle cx="50" cy="50" r="40" />
                  </svg>
                  <br>
                  <br>
                  <svg id="center-1" height="100" width="100">
                    <circle cx="50" cy="50" r="40"  />
                  </svg>
            </div>

            
            

        </div>
    </article>
</section>

<script src="{{url('js/landing.js')}}"></script>

</body>
</html>