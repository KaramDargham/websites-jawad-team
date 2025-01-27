<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <title>Concrete</title>
    <link href="/Concrete/dist/output.css" rel="stylesheet">
</head>

<body class="font-bodyFont">
<nav class="text-center " style="background: white">
    <div class="grid lg:grid-cols-2 md:grid-cols-1 items-center ">
        <div class="flex justify-center items-center p-2 ">
            <img src="/Concrete/dist/img/logo.svg" class="w-12 brand">
        </div>
        <a href="" class="nav-link pt-3 text-primaryColor decoration-primaryColor font-bold text-xl block lg:text-end sm:text-center md:text-center lg:mx-40 md:mx-0 sm:mx-0 pb-3 lg:w-1/2 sm:w-full">Get Free Quotes</a>
    </div>
</nav>
<div class=" w-full grid grid-cols-3 p-3 justify-center shadow list-bar" style="background: #6ab06d">
    <div class="text-center text-white font-bold flex justify-center items-center"><span class="pr-2 icon w-8 flex justify-center items-center"><img src="/Concrete/dist/img/chat.png" style="display: inline"></span><h1 class="flex justify-center items-center">Get the best quotes, fast!</h1></div>
    <div class="text-center text-white font-bold flex justify-center items-center"><span class="pr-2 icon w-8 flex justify-center items-center"><img src="/Concrete/dist/img/location.png" style="display: inline"> </span><h1 class="flex justify-center items-center">Over 5,000 engineers across the UK</h1></div>
    <div class="text-center text-white font-bold flex justify-center items-center"><span class="pr-2 icon w-8 flex justify-center items-center"><img src="/Concrete/dist/img/check.png" style="display: inline"></span><h1 class="flex justify-center items-center">Gas Safe registered engineers</h1></div>
</div>
<div>
    <div class=" w-full grid grid-cols-3 p-3 justify-center shadow list-bar-mobile" style="background: #6ab06d">
        <div class="text-center text-white font-bold flex justify-center items-center gap-2"><span class=" icon w-8 flex justify-center items-center"><img src="/Concrete/dist/img/chat.png" style="display: inline"></span><h1 class="flex justify-start items-center">Get the best quotes, fast!</h1></div>
        <div class="text-center text-white font-bold flex justify-center items-center gap-2 "><span class=" icon w-8 flex justify-center items-center"><img src="/Concrete/dist/img/location.png" style="display: inline"> </span><h1 class="flex justify-start items-center" >Over 5,000 engineers across the US</h1></div>
        <div class="text-center text-white font-bold flex justify-center items-center gap-2" style="padding-bottom: 0px"><span class=" icon w-8 flex justify-center items-center"><img src="/Concrete/dist/img/check.png" style="display: inline"></span><h1 class="flex justify-start items-center">Gas Safe registered engineers</h1></div>
    </div>
    <h3 style="background-color: #038b570f; " class="text-center text-[55px] max-[360px]:text-[25px] max-[480px]:text-[30px] font-bold text-secondaryColor pt-3 px-3 max-[480px]:pt-4 w-full">
        Get your concrete deal
    </h3>
    <h3 style="background-color: #038b570f; " class="text-gray-600 text-center text-[22px] max-[240px]:text-[15px] max-[480px]:text-[15px] font-bold pt-2 px-3 max-[480px]:py-4 w-full">
        by quickly comparing 3 FREE quotes
    </h3>
    <div  style="background-color: #038b570f;padding-bottom: 400px">
        <div  class="grid md:grid-cols-1  sm:grid-cols-1 justify-center items-center lg:pb-44" id="grid">
            <div class="lg:pb-10  flex justify-center lg:col-span-7 sm:col-span-1 border f-form" style="border: none;">
                <form class="bg-white lg:p-6 md:p-0 sm:p-0 lg:w-8/12 rounded shadow-2xl pt-2" id="regForm" action="/Concrete/dist/submit-page.php">
                    <div class="tab text-white text-3xl font-bodyFont">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600">What service do you need?</h1>
                        </div>
                        <label class="flex justify-center items-center pt-8">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(4)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Concrete Countertops Install
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-2">
                            <input type="radio" class="card-input-element hidden" >
                            <button type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Driveway
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-2">
                            <input  type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(2)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Floors & Walkways
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-2">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(3)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Foundation
                            </button>
                        </label>
                    </div>
                    <div class="tab text-white text-3xl font-bodyFont">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600">What floors & walkways work do you need?</h1>
                        </div>
                        <label class="flex justify-center items-center pt-8">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(3)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Concrete Driveways Floors Install
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-3">
                            <input type="radio" class="card-input-element hidden" >
                            <button  type="button" onclick="radioClick(3)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                <div class="btn-wizard-radio-text">Driveways Or Floors Repair</div>
                            </button>
                        </label>
                    </div>
                    <div class="tab text-white text-3xl font-bodyFont">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600">What floors & walkways work do you need?</h1>
                        </div>
                        <label class="flex justify-center items-center pt-8">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(2)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Concrete Flatwork Repair & Resurface
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-3">
                            <input type="radio" class="card-input-element hidden" >
                            <button  type="button" onclick="radioClick(2)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Garage
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-3">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(2)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Leveling / Sawing
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-3">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(2)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Patios
                            </button>
                        </label>
                    </div>
                    <div class="tab text-white text-3xl font-bodyFont">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600">What foundation work do you need?</h1>
                        </div>
                        <label class="flex justify-center items-center pt-8">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Concrete Foundation Repair
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-3">
                            <input type="radio" class="card-input-element hidden" >
                            <button  type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Concrete Retaining Walls
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-3">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Concrete Walls Gates Fences
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-3">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Foundation Install
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-3">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Foundation Or Basement Waterproofing
                            </button>
                        </label>
                    </div>
                    <div class="tab text-white text-3xl font-bodyFont">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600">What type of property do you want a quote for?</h1>
                        </div>
                        <label class="flex justify-center items-center pt-8">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Home
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-2">
                            <input type="radio" class="card-input-element hidden" >
                            <button type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                Business
                            </button>
                        </label>
                    </div>
                    <div class="tab text-white text-3xl font-bodyFont">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600">Do you own or rent this home?</h1>
                        </div>
                        <label class="flex justify-center items-center pt-8">
                            <input type="radio" class="card-input-element hidden">
                            <button type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                I own
                            </button>
                        </label>
                        <label class="flex justify-center items-center pt-2">
                            <input type="radio" class="card-input-element hidden" >
                            <button type="button" onclick="radioClick(1)" class="bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-9/12 md:w-7/12 sm:w-full py-3 me-2 mb-2  text-center items-center">
                                I rent
                            </button>
                        </label>
                    </div>
                    <div class="tab text-white text-3xl font-bodyFont">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600">Okay… Can you specify your address, please?
                            </h1>
                        </div>
                        <div class="pt-10 flex justify-center">
                            <input type="text" id="address" class="text-xl bg-blue-950 bg-opacity-60 placeholder-white text-white  rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5" placeholder="e.g. 123 West Main Road" required />
                        </div>
                        <div id="address-error" class="text-center" style="font-size: 14px">

                        </div>
                        <div class="flex justify-center pt-5 items-center text-center">
                            <button type="button" onclick="nextPrev(1)" class="  bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 mt-3  text-center items-center">
                                Next
                            </button>
                        </div>
                    </div>
                    <div class="tab text-white text-3xl font-bodyFont">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600">Can you add your zip code, please?
                            </h1>
                        </div>
                        <div class="pt-10 flex justify-center">
                            <input type="number" pattern="[0-9]*" id="zip" class="text-xl bg-blue-950 bg-opacity-60 placeholder-white text-white  rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5" placeholder="e.g. 12345" required />
                        </div>
                        <div id="zip-error" class="text-center" style="font-size: 14px">

                        </div>
                        <div class="flex justify-center pt-5 items-center text-center">
                            <button type="button" onclick="nextPrev(1)" class="  bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2 mt-3  text-center items-center">
                                Next
                            </button>
                        </div>
                    </div>
                    <div class="tab tab tab text-white text-3xl">
                        <div class="text- text-4xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600 ">Great! What is your email?</h1>
                        </div>
                        <div class="pt-10 flex justify-center lg:px-0 md:px-5 sm:px-5">
                            <input type="tel" id="email" class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white  rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5" placeholder="Enter email address" required />
                        </div>
                        <div id="email-error" class="text-center" style="font-size: 14px">

                        </div>
                        <div class="flex justify-center pt-5 items-center">
                            <button type="button" onclick="nextPrev(1)" class="  bg s text-xl mt-3 gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2  text-center items-center">
                                Next
                            </button>
                        </div>
                    </div>
                    <div class="tab text-white text-4xl font-bodyFont">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600">How would you like the pros to refer to you?</h1>
                        </div>
                        <div class="pt-10 flex justify-center ">
                            <input type="text" id="name" class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white  rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5" placeholder="Enter first Name" required />
                        </div>
                        <div class="pt-5 flex justify-center">
                            <input id="lname" type="text" class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white  rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5 " placeholder="Enter last Name" required />
                        </div>
                        <div id="name-error" class="text-center" style="font-size: 14px">

                        </div>
                        <div class="pt-10 flex justify-center items-center">
                            <button style="margin-top: 20px" type="button" onclick="nextPrev(1)" class="  bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2  text-center items-center">
                                Next
                            </button>
                        </div>
                    </div>
                    <div class="tab tab tab text-white text-3xl">
                        <div class="text- text-3xl font-semibold pt-5 text-center p-5">
                            <h1 class="pb-3 text-4xl text-gray-600 ">Wonderful! We are ready to connect you with a contractor
                                Please enter your phone number</h1>
                        </div>
                        <div class="pt-10 flex justify-center lg:px-0 md:px-5 sm:px-5">
                            <input type="tel" id="phone" class="text-xl placeholder-white bg-blue-950 bg-opacity-60 text-white  rounded-full block lg:w-8/12 md:w-7/12 sm:w-full p-3.5" placeholder="Enter phone number" required />
                        </div>
                        <div id="phone-error" class="text-center" style="font-size: 14px">

                        </div>
                        <div class="flex justify-center pt-5 items-center">
                            <button type="button" onclick="nextPrev(1)" class=" mt-3 bg s text-xl gap-2 font-medium text-white bg-secondaryColor hover:bg-opacity-90  rounded-full p-4 lg:w-1/3 md:w-7/12 sm:w-full py-3 mb-2  text-center items-center">
                                Submit
                            </button>
                        </div>
                    </div>
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                    <div style="overflow:auto" class="flex justify-center" >
                        <div style="float:right;">
                            <button class="text-xl text-gray-600 font-bold" type="button" id="prevBtn" onclick="back()">← Back</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="lg:text-start sm:text-center lg:col-span-12 s2 flex justify-center" style="height: -webkit-fill-available">
                <div class="rate">
                    <div class="description pb-14 w-full" >
                        <ul class="mt-8 text-[#4c4b4b]  text-xl font-semibold flex justify-between gap-8" style="list-style: circle;list-style-position: inside">
                            <li>Next day installation</li>
                            <li>Quotes from local engineers</li>
                        </ul>
                        <ul class="mt-8 text-[#4c4b4b]  text-xl font-semibold flex justify-between gap-8" style="list-style: circle;list-style-position: inside">
                            <li>1.9 million quotes in 10 years</li>
                            <li>Save up to £500 on installation</li>
                        </ul>
                        <div class="lg:mt-10 md:w-full sm:w-full flex justify-center py-5 eng-div ">
                            <div class=" md:w-9/12 py-3" style="background:#6ab06d;border-radius: 10px;">
                                <div class="md:flex justify-center ">
                                    <h1 class="text-white font-semibold text-xl">
                                        The smarter way to find approved heating engineers
                                    </h1>
                                </div>
                                <h4 class="text-center text-xl text-white font-semibold">
                                    Excellent 4.8 out of 5
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:text-start sm:text-center lg:pt-10 lg:col-span-5 s3" style="height: -webkit-fill-available">
                <div class="rate-mobile">
                    <div class="description-mobile pb-14">
                        <ul class="mt-8 text-white text-xl font-semibold" style="list-style: circle;list-style-position: inside">
                            <li>Next day installation</li>
                            <li>Quotes from local engineers</li>
                            <li>1.9 million quotes in 10 years</li>
                            <li>Save up to £500 on installation</li>
                        </ul>
                        <div class="lg:mt-10 lg:w-9/12 md:w-full sm:w-full flex justify-center py-5 eng-div-mobile">
                            <div class="lg:w-full md:w-9/12 py-3" style="background: #6ab06d;border-radius: 10px;">
                                <div class="md:flex justify-center ">
                                    <h1 class="text-white font-semibold ">
                                        The smarter way to find approved heating engineers
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/Concrete/dist/script.js"></script>
</body>

</html>