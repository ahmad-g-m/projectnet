  <!-- page for new post -->
        <form action="{{route('uploadAdmin')}}" method="post"  enctype="multipart/form-data">
             {!!csrf_field()!!}
            <label for="fileField">choose image :</label>
            <input type="file" name="upFileFromAdmin[]" id="fileField" multiple></br>
            <label for="brand"> brand: </label>
            <input type="text" name="brand" id="brand">
            <label for="name"> name: </label>
            <input type="text" name="name" id="name">
            <label for="model"> model: </label>
            <input type="text" name="model" id="model">
            <label for="price"> price: </label>
            <input type="text" name="price" id="price">
            <label for="year"> year : </label>
            <input type="text" name="year" id="year">
            <label for="time0to100"> time 0 to 100 : </label>
            <input type="text" name="time0to100" id="time0to100">
            <label for="transmission"> transmission: </label>
            <input type="text" name="transmission" id="transmission">
            <label for="fueltype">fuel type: </label>
            <input type="text" name="fueltype" id="fueltype">
            <label for="enginepowers"> engine power :</label>
            <input type="text" name="enginepowers" id="enginepowers">
            <label for="numbercylinder"> cylinder numbers :</label>
            <input type="text" name="numbercylinder" id="numbercylinder">
            <label for="mark"> mark :</label>
            <input type="text" name="mark" id="mark">
            <label for="moredetail"> more detail: </label>
            <textarea name="moredetail" id="moredetail" cols="60" rows="15"></textarea>
            <input type="submit" name="newPostBtn" id="newPostBtn" value="newPost">
        </form>
        <?php
        use Illuminate\Support\Facades\Storage;
        if(isset($contents)){
            // echo(Storage::disk('s3')->exists('photos/else/5FEl6nROVpape15BUu8hH5cnxMVFHyxn1QQ0TbKu.jpg'));
            foreach($contents as $cont){
                $c = $cont->address;
                $conte = Storage::get($c);
            
            ?>
            <img src="data:image/jpeg;base64,{{ base64_encode($conte)}}" style = "width : 150px ; height: 150px"
             alt="notingggg">
            <?php
            }
        }
        ?>