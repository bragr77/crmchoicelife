<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Consent Form</title>

    </head>
    <body>
        <img class="mb-3" src="{{ asset('images/logo-horizontal.png') }}" alt="" style="width: 250px">

        <h2 class="text-center">Consent Form</h2>


        <div class="card border-secondary mt-5">
            <div class="row mt-4 mx-3">
                <p class="text-justify">
                    I, <span class="font-weight-bold text-uppercase">{{ $cliente->nombres }} {{ $cliente->apellidos }}</span>, give my permission to <span class="font-weight-bold text-uppercase">{{ $cliente->user->name }} {{ $cliente->user->lastname }}</span> to serve as the health insurance Agent or broker for myself and my entire household if applicable, for purposes of enrollment in a Qualified Health Plan offered on the Federally Facilitated Marketplace. By consenting to this agreement, I authorize the above-mentioned Agent to view and use the confidential information provided by me in writing, electronically, or by phone only for one or more of the following:
                </p>
            </div>

            <div class="row mt-4 mx-3">
                <ul class="text-justify mr-4">
                    <li>Searching for an existing Marketplace application.</li>
                    <li>Completing an application for eligibility and enrullment in a Marketplace Qualified Health Plan or other government insurance affordability programs, such as Medicaid and CHIP or advance tax credits to help pay for Marketplace premiums.</li>
                    <li>Providing ongoing account maintenance and enrollment assistance, as necessary.</li>
                    <li>Responding to inquiries from the Marketplace regarding my application.</li>
                </ul>
            </div>

            <div class="row mt-4 mx-3">
                <p class="text-justify">
                    I understand that the Agent will not use or share my personally identifiable information (PII) for any purposes other than those listed above. The Agent will ensure that my PII is kept private and safe when collecting, storing, and using my PII for the stated purposes above.
                </p>
            </div>

            <div class="row mt-4 mx-3">
                <ul class="text-justify mr-4">
                    <li>I confirm that the information I provide for entry on my Marketplace eligibility and enrollment application will be true to the best of my knowledge.</li>
                    <li>I confirm that I have reviewed my completed application and that all information is accurate..</li>
                </ul>
            </div>

            <div class="row mt-4 mx-3">
                <p class="text-justify">
                    I understand that I do not have to share additional personal information about myself or my health with my Agent beyond what is required on the application for eligibility and enrollment purposes. I understand that my consent remains in effect until I revoke it, and I may revoke or modify my consent at any time by contacting my Agent or by revoking it through my HealthSherpa dashboard.
                </p>
            </div>
        </div>

        <div style="page-break-after:always;"></div>

        <div class="card border-secondary">
            <div class="card-header bg-primary"></div>

            <div class="row mt-4 mx-3">
                <p class="text-justify">
                    <span class="font-weight-bold">Name of primary writing Agent:</span> <u>{{ $cliente->user->name }} {{ $cliente->user->lastname }}</u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Agent National Producer Number:</span> <u>{{ $cliente->user->npn }}</u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Phone number:</span> <u>+1 {{ $cliente->user->phone }}</u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Email address:</span> <u>{{ $cliente->user->email }}</u>
                </p>
            </div>
        </div>


        <div class="card border-secondary mt-3">
            <div class="card-header bg-primary"></div>

            <div class="row mt-4 mx-3">
                <p class="text-justify">
                    <span class="font-weight-bold">Name of Agency (if applicable):</span> <u>Choice Life Financial LLC</u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Agent National Producer Number:</span> <u>20499254</u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Owner of Agency:</span> <u>Choice Life Financial LLC</u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Phone number:</span> <u>+1 (346) 574-7372</u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Email address:</span> <u>info@choicelifefg.com</u>
                </p>
            </div>
        </div>

        <div class="card border-secondary mt-3">
            <div class="card-header bg-primary"></div>

            <div class="row mt-4 mx-3">
                <p class="text-justify">
                    <span class="font-weight-bold">Name of primary household contact:</span> <u><span class="text-capitalize">{{ $cliente->nombres }} {{ $cliente->apellidos }}</span></u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Authorized representative (if applicable):</span> <u></u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Phone number:</span> <u>+1 {{ $cliente->telefono }}</u>
                </p>
                <p class="text-justify">
                    <span class="font-weight-bold">Email address:</span> <u>{{ $cliente->email }}</u>
                </p>
                <br>
                <p class="text-justify">
                    <span class="font-weight-bold">Primary contact signature:</span> <u><span class="text-capitalize">{{ $cliente->nombres }} {{ $cliente->apellidos }}</span></u>
                </p>

                {{-- @php
                    \Carbon\Carbon::setLocale('en');
                @endphp --}}
                <p class="text-justify">
                    <span class="font-weight-bold">Date:</span> <u>{{ \Carbon\Carbon::parse($cliente->created_at)->isoFormat('MMMM D [,] Y') }}</u>
                </p>
            </div>
        </div>





    </body>
</html>
