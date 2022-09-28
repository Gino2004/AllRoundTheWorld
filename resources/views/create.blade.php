<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('create/{country}') }}" method="post">
                {{ csrf_field() }}
                <table>
                <tr>
                <td><label for="txttitel"class="text-black">titel: </label>
                <input type="text" name="title" id="txttitle"></td>
                </tr><tr>
                <td><label for="txtdescription"class="text-black">Description: </label>
                <input type="text" name="description" id="txtdescription"></td>
                </tr>
                <tr>
                <td><label for="txtphoto"class="text-black">Photo: </label>
                <input type="text" name="photo" id="txtphoto"></td>
                </tr>
                </table>
                <input style="background-color: aqua; padding: 0.5em; border-radius: 40px;" type="submit"
                    value="Opslaan">
            </form>
        </div>
    </div>
</body>
</html>

