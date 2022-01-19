<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Contact form</title>
</head>
<body>

@if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
@endif
<div class="contact">
    <div class="info-contact">
        <ul>
            <li><img src="/img/pin-2.png" alt=""> Address</li>
             <p>69 rue maubeuge 75010</p>
            <li><img src="/img/telephone.png" alt=""> let's talk</li>
             <p>+336532467</p>
            <li><img src="/img/email.png" alt=""> General Support</li>
             <p>no.reply@gmail.com</p>
        </ul>
    </div>
    
    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <h1>Contact Us!</h1>
        <div class="info">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="enter your name" value="{{old('name')}}" class="bg-gray-100 border-2  w-full p-4 rounded-lg @error('name') border-red-200 @enderror">
            </div>
            <div>
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                {{$message}}
                </div>
                @enderror
        </div>
        <div class="info">
                <label for="email" class="sr-only">e-mail</label>
                <input type="text" name="email" id="email" placeholder="enter your email" value="{{old('email')}}" class="bg-gray-100 border-2  w-full p-4 rounded-lg @error('email') border-red-200 @enderror">
            </div>
            <div>
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                {{$message}}
                </div>
                @enderror
        </div>
        <div class="info">
                <label for="subject" class="sr-only">subject</label>
                <input type="text" name="subject" id="subject" placeholder="enter the subject" value="{{old('subject')}}" class="bg-gray-100 border-2  w-full p-4 rounded-lg @error('subject') border-red-200 @enderror">
            </div>
            <div>
                @error('subject')
                <div class="text-red-500 mt-2 text-sm">
                {{$message}}
                </div>
                @enderror
        </div>
        <div class="info">
                <!--<label for="message" class="sr-only">message</label>-->
                <label for="message" class="sr-only"></label>
            <textarea name="message" id="body" cols="30" rows="8" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('message') border-red-500 @enderror" placeholder=">>>Post something!"></textarea>
            </div>
            <div>
                @error('message')
                <div class="text-red-500 mt-2 text-sm">
                {{$message}}
                </div>
                @enderror
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">send</button>
        </div>

    </form>
    
</div>   
</body>
</html>