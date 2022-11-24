<h1>Form</h1>

<form method="post" action="thisisaction" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="textbox" name="thisisname"placeholder="this is name"/>
    <br />
    <span class="erroris">
        @error('thisisname')
            {{$message}}

        @enderror
    </span>
    <br />



    <input class="helofield" type="number" name="age" placeholder="this is age"/> <br />
    <br />
    <span class="erroris">
        @error('age')
            {{$message}}
        @enderror
    </span>
    <br />
    <input class="helofield" type="email" name="email" placeholder="this is email"/> <br />
    <br />
    <span class="erroris">
        @error('email')
            {{$message}}

        @enderror
    </span>
    <br />

    <input class="helofield" type="file" name="img"/> <br />

    <br />
    <br />
    <span class="erroris">
        @error('img')
            {{$message}}

        @enderror
    </span>

    <input class="helofield" type="submit" name="submit" />
</form>



<style>
    .erroris{
        color:red;
    }

    .helofield{
        margin-top:20px    }
</style>