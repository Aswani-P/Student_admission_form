<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1>Student Registration</h1>
</div>




    <div class="container">

        <div class="container">

            <form action="{{route('storeDetails')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                            <label for="namecontroll" class="form-label">
                                    Name of applicant (in block letters as in SSLC)</label>
                            <input type="text" class="form-control" name ="name"id="namecontroll" value="{{$result->name}}" disabled readonly>
                    </div>


                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label> 
                        <select name="gender" id="gender" class="form-control" value="{{$result->gender}}"  disabled readonly>
                            <option value="">Choose gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="transgender">Transgender</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="dob">Date of Birth in Christian Era*(Copy of certificate to prove should be enclosed)
                        </label>
                        <input type="date" name="date" value="{{$result->dob}}"  disabled readonly/>
                    </div>
               


                    <div class="container">
                        <div class="mb-3">
                            <label for="caste" class="form-label">
                            Religion/Caste</label>
                            <input type="text" class="form-control" name="caste" id="castcontrol" value="{{$result->caste}}" placeholder="enter the religion/caste"  disabled readonly>
                        </div>


                        <div class="mb-3">
                            <label for="nation">Nationality* </label>
                            <select name="nationality" id="nation" class="form-control" value="{{$result->nationality}}" disabled readonly>
                                <option value="">choose nationality</option>
                                <option value="afganistan">Afganistan</option>
                                <option value="america">America</option>
                                <option value="australia">Australia</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="parent">Name & occupation of parent / guardian & relationship</label>
                            <input type="text" class="form-control" name="parent"id="namecontroll" value="{{$result->parent}}" disabled readonly>
                        </div>


                        <div class="container">
                            <div class="mb-3">
                                <label for="addr">Address for communication with pin code & Telephone no* (in block letters)
                                </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"   disabled readonly>{{$result->address}}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="contact" class="form-label">
                                Contact</label>
                                <input type="text" class="form-control"name ="phone" id="phone" placeholder="enter the contact number" value="{{$result->conatct}}" disabled readonly>
                            </div>


                            <div class="mb-3">
                                <label for="emial" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$result->email}}" placeholder="name@example.com"  disabled readonly>
                            </div>
                        </div>


                    <div class="conatiner">
                        <div class="mb-3">
                            <label for="exm" class="form-label">Name of examination</label>
                            <input type="text" class="form-control" id="exm" name="exm" value="{{$result->examination}}" disabled readonly>
                        </div>
                        <div class="mb-3">
                            <label for="reg" class="form-label">Register number 12th</label>
                            <input type="text" class="form-control" id="red" name="register"value="{{$result->register}}"  disabled readonly>
                        </div>
                        <div class="mb-3">
                            <label for="pss" class="form-label">Year of passing 12th</label>
                            <input type="text" class="form-control" id="pss" name="yearofpassing" value="{{$result->yearofpassing}}" disabled readonly>
                        </div>
                        <div class="mb-3">
                            <label for="insti" class="form-label">Name of Institution*</label>
                            <input type="text" class="form-control" id="red" name="insti" value="{{$result->institution}}" disabled readonly>
                        </div>
                        <div class="mb-3">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" name="state"  value="{{$result->state}}"disabled readonly>
                        </div>
                    <div class="container">
                       
                            <div class="mb-3">
                                <p>
                                    <label for="photo" class="form-label">Photo</label>
                                    <a href="{{asset('storage/images/' . $result->photo)}}" class="btn btn-dark btn-sm">view</a>
                            
                                
                                    <label for="state" class="form-label">Certificate</label>
                                    <a href="{{asset('storage/certificates/' . $result->certificate)}}" class="btn btn-dark btn-sm">view</a>
                                    
                                
                            
                                    <label for="state" class="form-label">Aadhar</label>
                                    <a href="{{asset('storage/documents/' . $result->adhar)}}" class="btn btn-dark btn-sm">view</a>
                                </p>
                            </div>
                       
                        
                    </div>




                    <div class="conatiner">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Subject</th>
                                <th scope="col">Secured</th>
                                <th scope="col">Maximum</th>
                                <th scope="col">Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Chemistry</th>
                                    <td><input type="text" name="tab1"  value="{{$result->chemestry_sec}}"disabled readonly></td>
                                    <td><input type="text" name="tab2" value="{{$result->chemestry_max}}"  disabled readonly></td>
                                    <td><input type="text" name="tab3" value="{{$result->chemestry_per}}" disabled readonly></td>
                                </tr>
                                <tr>
                                    <th scope="row">Biology</th>
                                    <td><input type="text" name="tab4" value="{{$result->biology_sec}}" disabled readonly></td>
                                    <td><input type="text" name="tab5"  value="{{$result->biology_max}}"disabled readonly></td>
                                    <td><input type="text" name="tab6"  value="{{$result->biology_per}}"disabled readonly></td>
                                </tr>
                                <tr>
                                    <th scope="row">English</th>
                                    <td><input type="text" name="tab7" value="{{$result->english_sec}}" disabled readonly></td>
                                    <td><input type="text" name="tab8" value="{{$result->english_max}}" disabled readonly></td>
                                    <td><input type="text" name="tab9" value="{{$result->english_per}}" disabled readonly></td>
                                </tr>
                                <tr>
                                    <th scope="row">Physics</th>
                                    <td><input type="text" name="tab10" value="{{$result->physics_sec}}"  disabled readonly></td>
                                    <td><input type="text" name="tab11"value="{{$result->physics_max}}"  disabled readonly></td>
                                    <td><input type="text" name="tab12"  value="{{$result->physics_per}}"disabled readonly></td>
                                </tr>
                                <tr>
                                    <th scope="row">Total</th>
                                    <td><input type="text" name="tab13" value="{{$result->total_sec}}"  disabled readonly></td>
                                    <td><input type="text" name="tab14" value="{{$result->tatal_max}}" disabled readonly></td>
                                    <td><input type="text" name="tab15" value="{{$result->tatal_max}}" disabled readonly></td>
                                </tr>
                                <tr>
                                    <th scope="row">Grand Total</th>
                                    <td><input type="text" name="tab16" value="{{$result->grand_sec}}"  disabled readonly></td>
                                    <td><input type="text" name="tab17" value="{{$result->grand_max}}"  disabled readonly></td>
                                    <td><input type="text" name="tab18" value="{{$result->grand_per}}" disabled readonly></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-3">
                            <button class="btn btn-outline-dark btn-sm form-control" type="submit">Submit</button>
                        </div>
            </form>
         </div>
    </body>
</html>