@extends('frontend.layout.app')

@section('content')
    <style>
        body,
        div {
            background-color: rgb(50, 49, 49);
            color: white
        }

        td {
            background-color: pink !important
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: white !important;
        }
    </style>
    <section class="domail-table-sec pb-5 section-ptb-100">
        <div class="container-fluid">
            <div class="table-filter-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="filter-box">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="btn-txt">Patterns</div>

                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="filter-field">
                                                <div class="sellect-all mb-3">
                                                    <input type="checkbox" id="all" name="patterns" value="" />
                                                    <label for="all"> Select All</label>
                                                </div>
                                                <div class="select-check-box mb-4">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="L" value="L"
                                                            name="pattern" />
                                                        <label for="L"> L</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="LL" value="LL"
                                                            name="pattern" />
                                                        <label for="LL"> LL</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="LLL" value="LLL"
                                                            name="pattern" />
                                                        <label for="LLL"> LLL</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="4L" value="4L"
                                                            name="pattern" />
                                                        <label for="4L"> LLLL</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="5L" value="5L"
                                                            name="pattern" />
                                                        <label for="5L"> 5L</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="6L" value="6L"
                                                            name="pattern" />
                                                        <label for="6L"> 6L</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="7L" value="7L"
                                                            name="pattern" />
                                                        <label for="7L"> 7L</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="8L" value="8L"
                                                            name="pattern" />
                                                        <label for="8L"> 8L</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CC" value="cc"
                                                            name="pattern" />
                                                        <label for="CC"> CC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CV" value="CV"
                                                            name="pattern" />
                                                        <label for="CV">CV</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CVC" value="CVC"
                                                            name="pattern" />
                                                        <label for="CVC"> CVC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CVV" value="CVV"
                                                            name="pattern" />
                                                        <label for="CVV"> CVV</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box mb-4">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VCC" value="VCC"
                                                            name="pattern" />
                                                        <label for="VCC"> VCC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VCV" value="VCV"
                                                            name="pattern" />
                                                        <label for="VCV">VCV</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VVC" value="VVC"
                                                            name="pattern" />
                                                        <label for="VVC"> VVC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VVV" value="VVV"
                                                            name="pattern" />
                                                        <label for="VVV"> VVV</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CCCC" value="CCCC"
                                                            name="pattern" />
                                                        <label for="CCCC"> CCCC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CCCV" value="CCCV"
                                                            name="pattern" />
                                                        <label for="CCCV"> CCCV</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CCVC" value="CCVC"
                                                            name="pattern" />
                                                        <label for="CCVC"> CCVC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CCVV" value="CCVV"
                                                            name="pattern" />
                                                        <label for="CCVV"> CCVV</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CVCC" value="CVCC"
                                                            name="pattern" />
                                                        <label for="CVCC"> CVCC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CVCV" value="CVCV"
                                                            name="pattern" />
                                                        <label for="CVCV"> CVCV</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CVVC" value="CVVC"
                                                            name="pattern" />
                                                        <label for="CVVC">CVVC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="CVVV" value="CVVV"
                                                            name="pattern" />
                                                        <label for="CVVV"> CVVV</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VCCC" value="VCCC"
                                                            name="pattern" />
                                                        <label for="VCCC"> VCCC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VCCV" value="VCCV"
                                                            name="pattern" />
                                                        <label for="VCCV"> VCCV</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VCVC" value="VCVC"
                                                            name="pattern" />
                                                        <label for="VCVC"> VCVC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VCVV" value="VCVV"
                                                            name="pattern" />
                                                        <label for="VCVV"> VCVV</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box mb-3">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VVCC" value="VVCC"
                                                            name="pattern" />
                                                        <label for="VVCC"> VVCC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VVCV" value="VVCV"
                                                            name="pattern" />
                                                        <label for="VVCV"> VVCV</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VVVC" value="VVVC"
                                                            name="pattern" />
                                                        <label for="VVVC"> VVVC</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="VVVV" value="VVVV"
                                                            name="pattern" />
                                                        <label for="VVVV"> VVVV</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box mb-3">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="N" value="N"
                                                            name="pattern" />
                                                        <label for="N"> N</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="NN" value="NN"
                                                            name="pattern" />
                                                        <label for="NN"> NN</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="NL" value="NL"
                                                            name="pattern" />
                                                        <label for="NL"> NL</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="LN" value="LN"
                                                            name="pattern" />
                                                        <label for="LN"> LN</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="NNN" value="NNN"
                                                            name="pattern" />
                                                        <label for="NNN"> NNN</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="NNL" value="NNL"
                                                            name="pattern" />
                                                        <label for="NNL"> NNL</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="NLN" value="NLN"
                                                            name="pattern" />
                                                        <label for="NLN"> NLN</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="NLL" value="NLL"
                                                            name="pattern" />
                                                        <label for="NLL"> NLL</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box mb-3">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="LNN" value="LNN"
                                                            name="pattern" />
                                                        <label for="LNN"> LNN</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="LNL" value="LNL"
                                                            name="pattern" />
                                                        <label for="LNL"> LNL</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="LLN" value="LLN"
                                                            name="pattern" />
                                                        <label for="LLN"> LLN</label>
                                                    </div>
                                                </div>
                                                <div class="select-check-box mb-3">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="NNNN" value="NNNN"
                                                            name="pattern" />
                                                        <label for="NNNN"> NNNN</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="5N" value="5N"
                                                            name="pattern" />
                                                        <label for="5N"> 5N</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="6N" value="6N"
                                                            name="pattern" />
                                                        <label for="6N"> 6N</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="7N" value="7N"
                                                            name="pattern" />
                                                        <label for="7N"> 7N</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="8N" value="8N"
                                                            name="pattern" />
                                                        <label for="8N"> 8N</label>
                                                    </div>
                                                </div>
                                                <div class="two-grid mb-3">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="one" value="oneWord"
                                                            name="pattern" />
                                                        <label for="one"> one word</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="two" value="twoWord"
                                                            name="pattern" />
                                                        <label for="two"> two word</label>
                                                    </div>
                                                    {{-- <div class="select-item">
                                                        <input type="checkbox" id="seo" name="seo"
                                                            value="" />
                                                        <label for="seo"> seo Domain </label>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="filter-box">
                            <div class="accordion" id="one">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#boxone" aria-expanded="true" aria-controls="boxone">
                                            <div class="btn-txt">Search and Filters</div>

                                        </button>
                                    </h2>
                                    <div id="boxone" class="accordion-collapse collapse show"
                                        aria-labelledby="heading" data-bs-parent="#one">
                                        <div class="accordion-body">
                                            <form>
                                                <label for="domain-search">Domain Search</label>
                                                <input type="text" id="domain-search" class="doamin-search"
                                                    name="domain-search" /><br />
                                                <br />

                                                <label for="domain-age">Domain Age</label>
                                                <input type="number" id="domain-age" name="ageFrom"
                                                    placeholder="From" />
                                                <input type="number" id="domain-age" name="ageTo"
                                                    placeholder="To" /><br />
                                                <br />

                                                <label for="price">Price</label>
                                                <input type="number" id="price" name="priceFrom"
                                                    placeholder="From" />
                                                <input type="number" id="price" name="priceTo"
                                                    placeholder="To" /><br />
                                                <br />
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="filter-box">
                            <div class="accordion" id="three">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingthree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#boxthree" aria-expanded="true" aria-controls="boxthree">
                                            <div class="btn-txt">Domain Marketplace</div>

                                        </button>
                                    </h2>
                                    <div id="boxthree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingthree" data-bs-parent="#three">
                                        <div class="accordion-body">
                                            <div class="box-item">
                                                <div class="sellect-all mb-3">
                                                    <input type="checkbox" id="all" name="select-all-market"
                                                        value="" />
                                                    <label for="all"> Select All</label>
                                                </div>
                                                <div class="select-grid-item mb-4">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Godaddy" value="Godaddy"
                                                            name="market" />
                                                        <label for="Godaddy"> Godaddy</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Park.io" value="Park.io"
                                                            name="market" />
                                                        <label for="Park.io"> Park.io</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Snapnames" value="Snapnames"
                                                            name="market" />
                                                        <label for="Snapnames"> Snapnames</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Dynadot" value="Dynadot"
                                                            name="market" />
                                                        <label for="Dynadot"> Dynadot</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Namesilo" value="Namesilo"
                                                            name="market" />
                                                        <label for="Namesilo"> Namesilo</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Flippa" value="Flippa"
                                                            name="market" />
                                                        <label for="Flippa"> Flippa</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Namejet" value="Namejet"
                                                            name="market" />
                                                        <label for="Namejet"> Namejet</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Namecheap" value="Namecheap"
                                                            name="market" />
                                                        <label for="8L"> Namecheap</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Dropcatch" value="Dropcatch"
                                                            name="market" />
                                                        <label for="Dropcatch"> Dropcatch</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="DNWE" value="DNWE"
                                                            name="market" />
                                                        <label for="DNWE"> DNWE</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="DAAZ" value="DAAZ"
                                                            name="market" />
                                                        <label for="DAAZ"> DAAZ</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="SAW" value="SAW"
                                                            name="market" />
                                                        <label for="SAW"> SAW</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="DAN" value="DAN"
                                                            name="market" />
                                                        <label for="DAN"> DAN</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Sedo" value="Sedo"
                                                            name="market" />
                                                        <label for="DAN"> Sedo</label>
                                                    </div>
                                                </div>
                                                <h3 class="mb-3">Listing Type</h3>
                                                <div class="sellect-all mb-3">
                                                    <input type="checkbox" id="select-all-type" name="select-all-type"
                                                        value="" />
                                                    <label for="select-all-type"> Select All</label>
                                                </div>
                                                <div class="select-grid-item mb-4">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Auction" value="Auction"
                                                            name="type" />
                                                        <label for="Auction"> Auction</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Closeout" value="Closeout"
                                                            name="type" />
                                                        <label for="Closeout"> Closeout</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Pending" value="Pending"
                                                            name="type" />
                                                        <label for="Pending"> Pending Delete</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="buy" value="buy"
                                                            name="type" />
                                                        <label for="buy"> Buy Now</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Offer" value="Offer"
                                                            name="type" />
                                                        <label for="Offer"> Make an Offer</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Premium" value="Premium"
                                                            name="type" />
                                                        <label for="Premium"> Buy Now Premium</label>
                                                    </div>
                                                </div>

                                                <h3 class="mb-3">Options</h3>

                                                <div class="select-grid-item mb-4">
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Numbers" name="options"
                                                            value="numberOnly" />
                                                        <label for="Numbers"> Numbers Only</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="No" name="options"
                                                            value="noNumber" />
                                                        <label for="No"> No Numbers</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Hyphens" name="options"
                                                            value="noHyphen" />
                                                        <label for="Hyphens"> No Hyphens</label>
                                                    </div>
                                                    {{-- <div class="select-item">
                                                        <input type="checkbox" id="buy" name="options"
                                                            value="" />
                                                        <label for="buy"> Buy Now</label>
                                                    </div> --}}
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Alphabets" name="options"
                                                            value="alphabets" />
                                                        <label for="Alphabets"> Alphabets Only</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Only" name="options"
                                                            value="idnOnly" />
                                                        <label for="Only"> IDN’s Only</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="IDN’s" name="options"
                                                            value="noIdn" />
                                                        <label for="IDN’s"> No IDN’s</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id="Alphanumeric" name="options"
                                                            value="alphaNumeric" />
                                                        <label for="Alphanumeric">Alphanumeric</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="filter-box">
                            <div class="accordion" id="six">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingthree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#boxsix" aria-expanded="true" aria-controls="boxsix">
                                            <div class="btn-txt">TLD's</div>
                                        </button>
                                    </h2>
                                    <div id="boxsix" class="accordion-collapse collapse show"
                                        aria-labelledby="headingthree" data-bs-parent="#six">
                                        <div class="accordion-body">
                                            <div class="filter-field">
                                                <div class="sellect-all mb-3">
                                                    <input type="checkbox" id="tlds" name="tlds"
                                                        value="" />
                                                    <label for="tlds">Select All</label>
                                                </div>
                                                <div class="select-check-box mb-4">
                                                    <div class="select-item">
                                                        <input type="checkbox" class="tldsAll" id=".com"
                                                            value=".com" name="tld" />
                                                        <label for=".com">.com</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" class="tldsAll" id=".net"
                                                            value=".net" name="tld" />
                                                        <label for=".net"> .net</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" class="tldsAll" id=".org"
                                                            value=".org" name="tld" />
                                                        <label for=".org"> .org</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" class="tldsAll" id=".ai"
                                                            value=".ai" name="tld" />
                                                        <label for=".ai"> .ai</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" class="tldsAll" id=".io"
                                                            value=".io" name="tld" />
                                                        <label for=".io"> .io</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" class="tldsAll" id=".co"
                                                            value=".co" name="tld" />
                                                        <label for=".co"> .co</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" class="tldsAll" id=".info"
                                                            value=".info" name="tld" />
                                                        <label for=".info"> .info</label>
                                                    </div>
                                                </div>
                                                <h3 class="mb-3">CC TLDs</h3>
                                                <div class="select-check-box mb-3">
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ac" value=".ac"
                                                            name="tld" />
                                                        <label for=".ac"> .ac</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ad" value=".ad"
                                                            name="tld" />
                                                        <label for=".ad"> .ad</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ae" value=".ae"
                                                            name="tld" />
                                                        <label for=".ae"> .ae</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".af" value=".af"
                                                            name="tld" />
                                                        <label for=".af"> .af</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ag" value=".ag"
                                                            name="tld" />
                                                        <label for=".ag"> .ag</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ai" value=".ai"
                                                            name="tld" />
                                                        <label for=".ai"> .ai</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".al" value=".al"
                                                            name="tld" />
                                                        <label for=".al"> .al</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".am" value=".am"
                                                            name="tld" />
                                                        <label for=".am"> .am</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ao" value=".ao"
                                                            name="tld" />
                                                        <label for=".ao"> .ao</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".aq" value=".aq"
                                                            name="tld" />
                                                        <label for=".aq"> .aq</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ar" value=".ar"
                                                            name="tld" />
                                                        <label for=".ar"> .ar</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".as" value=".as"
                                                            name="tld" />
                                                        <label for=".as"> .as</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".at" value=".at"
                                                            name="tld" />
                                                        <label for=".at"> .at</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".au" value=".au"
                                                            name="tld" />
                                                        <label for=".au"> .au</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".aw" value=".aw"
                                                            name="tld" />
                                                        <label for=".aw"> .aw</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ax" value=".ax"
                                                            name="tld" />
                                                        <label for=".ax"> .ax</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".az" value=".az"
                                                            name="tld" />
                                                        <label for=".az"> .az</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ba" value=".ba"
                                                            name="tld" />
                                                        <label for=".ba"> .ba</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bb" value=".bb"
                                                            name="tld" />
                                                        <label for=".bb"> .bb</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bd" value=".bd"
                                                            name="tld" />
                                                        <label for=".bd"> .bd</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".be" value=".be"
                                                            name="tld" />
                                                        <label for=".be"> .be</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bf" value=".bf"
                                                            name="tld" />
                                                        <label for=".bf"> .bf</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bg" value=".bg"
                                                            name="tld" />
                                                        <label for=".bg"> .bg</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bh" value=".bh"
                                                            name="tld" />
                                                        <label for=".bh"> .bh</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bi" value=".bi"
                                                            name="tld" />
                                                        <label for=".bi"> .bi</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bj" value=".bj"
                                                            name="tld" />
                                                        <label for=".bj"> .bj</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bl" value=".bl"
                                                            name="tld" />
                                                        <label for=".bl"> .bl</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bm" value=".bm"
                                                            name="tld" />
                                                        <label for=".bm"> .bm</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bn" value=".bn"
                                                            name="tld" />
                                                        <label for=".bn"> .bn</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bo" value=".bo"
                                                            name="tld" />
                                                        <label for=".bo"> .bo</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bq" value=".bq"
                                                            name="tld" />
                                                        <label for=".bq"> .bq</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".br" value=".br"
                                                            name="tld" />
                                                        <label for=".br"> .br</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bs" value=".bs"
                                                            name="tld" />
                                                        <label for=".bs"> .bs</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bt" value=".bt"
                                                            name="tld" />
                                                        <label for=".bt"> .bt</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bv" value=".bv"
                                                            name="tld" />
                                                        <label for=".bv"> .bv</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bw" value=".bw"
                                                            name="tld" />
                                                        <label for=".bw"> .bw</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".by" value=".by"
                                                            name="tld" />
                                                        <label for=".by"> .by</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bz" value=".bz"
                                                            name="tld" />
                                                        <label for=".bz"> .bz</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ca" value=".ca"
                                                            name="tld" />
                                                        <label for=".ca"> .ca</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".cc" value=".cc"
                                                            name="tld" />
                                                        <label for=".cc"> .cc</label>
                                                    </div>
                                                </div>
                                                <h3 class="mb-3">Generic TLDs</h3>
                                                <div class="select-check-box mb-4">
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".app" value=".app"
                                                            name="tld" />
                                                        <label for=".app"> .app</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".art" value=".art"
                                                            name="tld" />
                                                        <label for=".art"> .art</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bar" value=".bar"
                                                            name="tld" />
                                                        <label for=".bar"> .bar</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bet" value=".bet"
                                                            name="tld" />
                                                        <label for=".bet"> .bet</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bid" value=".bid"
                                                            name="tld" />
                                                        <label for=".bid"> .bid</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bio" value=".bio"
                                                            name="tld" />
                                                        <label for=".bio"> .bio</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".biz" value=".biz"
                                                            name="tld" />
                                                        <label for=".biz"> .biz</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".boo" value=".boo"
                                                            name="tld" />
                                                        <label for=".boo"> .boo</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bot" value=".bot"
                                                            name="tld" />
                                                        <label for=".bot"> .bot</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".cab" value=".cab"
                                                            name="tld" />
                                                        <label for=".cab"> .cab</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".cam" value=".cam"
                                                            name="tld" />
                                                        <label for=".cam"> .cam</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".car" value=".car"
                                                            name="tld" />
                                                        <label for=".car"> .car</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ceo" value=".ceo"
                                                            name="tld" />
                                                        <label for=".ceo"> .ceo</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".cfd" value=".cfd"
                                                            name="tld" />
                                                        <label for=".cfd"> .cfd</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".com" value=".com"
                                                            name="tld" />
                                                        <label for=".com"> .com</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".dad" value=".dad"
                                                            name="tld" />
                                                        <label for=".dad"> .dad</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".day" value=".day"
                                                            name="tld" />
                                                        <label for=".day"> .day</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".dev" value=".dev"
                                                            name="tld" />
                                                        <label for=".dev"> .dev</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".diy" value=".diy"
                                                            name="tld" />
                                                        <label for=".diy"> .diy</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".dog" value=".dog"
                                                            name="tld" />
                                                        <label for=".dog"> .dog</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".eco" value=".eco"
                                                            name="tld" />
                                                        <label for=".eco"> .eco</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".esq" value=".esq"
                                                            name="tld" />
                                                        <label for=".esq"> .esq</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".fan" value=".fan"
                                                            name="tld" />
                                                        <label for=".fan"> .fan</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".fit" value=".fit"
                                                            name="tld" />
                                                        <label for=".fit"> .fit</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".foo" value=".foo"
                                                            name="tld" />
                                                        <label for=".foo"> .foo</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".fun" value=".fun"
                                                            name="tld" />
                                                        <label for=".fun"> .fun</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".fyi" value=".fyi"
                                                            name="tld" />
                                                        <label for=".fyi"> .fyi</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".gdn" value=".gdn"
                                                            name="tld" />
                                                        <label for=".gdn"> .gdn</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".how" value=".how"
                                                            name="tld" />
                                                        <label for=".how"> .how</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".icu" value=".icu"
                                                            name="tld" />
                                                        <label for=".icu"> .icu</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".inc" value=".inc"
                                                            name="tld" />
                                                        <label for=".inc"> .inc</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ing" value=".ing"
                                                            name="tld" />
                                                        <label for=".ing"> .ing</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".ink" value=".ink"
                                                            name="tld" />
                                                        <label for=".ink"> .ink</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".army" value=".army"
                                                            name="tld" />
                                                        <label for=".army"> .army</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".asia" value=".asia"
                                                            name="tld" />
                                                        <label for=".asia"> .asia</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".auto" value=".auto"
                                                            name="tld" />
                                                        <label for=".auto"> .auto</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".baby" value=".baby"
                                                            name="tld" />
                                                        <label for=".baby"> .baby</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".band" value=".band"
                                                            name="tld" />
                                                        <label for=".band"> .band</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".best" value=".best"
                                                            name="tld" />
                                                        <label for=".best"> .best</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".bike" value=".bike"
                                                            name="tld" />
                                                        <label for=".bike"> .bike</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".blog" value=".blog"
                                                            name="tld" />
                                                        <label for=".blog"> .blog</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".blue" value=".blue"
                                                            name="tld" />
                                                        <label for=".blue"> .blue</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".buzz" value=".buzz"
                                                            name="tld" />
                                                        <label for=".buzz"> .buzz</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".cafe" value=".cafe"
                                                            name="tld" />
                                                        <label for=".cafe"> .cafe</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".camp" value=".camp"
                                                            name="tld" />
                                                        <label for=".camp"> .camp</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".car" value=".car"
                                                            name="tld" />
                                                        <label for=".car"> .car</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".cars" value=".cars"
                                                            name="tld" />
                                                        <label for=".cars"> .cars</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".casa" value=".casa"
                                                            name="tld" />
                                                        <label for=".casa"> .casa</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".cash" value=".cash"
                                                            name="tld" />
                                                        <label for=".cash"> .cash</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".chat" value=".chat"
                                                            name="tld" />
                                                        <label for=".chat"> .chat</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".city" value=".city"
                                                            name="tld" />
                                                        <label for=".city"> .city</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".club" value=".club"
                                                            name="tld" />
                                                        <label for=".club"> .club</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".cool" value=".cool"
                                                            name="tld" />
                                                        <label for=".cool"> .cool</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".cyou" value=".cyou"
                                                            name="tld" />
                                                        <label for=".cyou"> .cyou</label>
                                                    </div>
                                                    <div class="select-item">
                                                        <input type="checkbox" id=".date" value=".date"
                                                            name="tld" />
                                                        <label for=".date"> .date</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="table-sec section-mb-75">
        <div class="container-fluid ">


            <div class="row expiring-domain-title">
                <div class="col-md-5">
                    <button id="export-csv" fdprocessedid="lxgxzc"><span><i class="fa fa-file"></i> Export to
                            CSV</span></button>
                    <button id="export-excel" fdprocessedid="bk2gt1"><span><i class="fa fa-file-excel-o"></i> Export
                            to
                            Excel</span></button>
                </div>
            </div>



            <div class="table-container">
                <div class="table-responsive">
                    <table id="example" class="display table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="all" name="all"> <label for="all">
                                        Select All</label></th>
                                <th>Domain List</th>
                                <th>Domain Character Length</th>
                                <th>Domain Age</th>
                                <th>Domain Source</th>
                                <th>Listing Type</th>
                                <th>Price</th>
                                <th>Expires</th>
                            </tr>
                        </thead>
                        <tbody class="domainListing">
                            <!-- Add more rows as needed -->
                            <tr>
                                <td>
                                    <input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" />
                                </td>
                                <td>google.io</td>
                                <td>9</td>
                                <td>5</td>
                                <td>park.io</td>
                                <td>-</td>
                                <td>-</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>example1.io</td>
                                <td>15</td>
                                <td>7</td>
                                <td>Dynadot</td>
                                <td>-</td>
                                <td>-</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>testdomain.date</td>
                                <td>11</td>
                                <td>4</td>
                                <td>domains.com</td>
                                <td>-</td>
                                <td>6</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>4444.co</td>
                                <td>13</td>
                                <td>-</td>
                                <td>example.io</td>
                                <td>-</td>
                                <td>12</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>1.net</td>
                                <td>10</td>
                                <td>-</td>
                                <td>domainpark.com</td>
                                <td>-</td>
                                <td>15</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>online-site.org</td>
                                <td>7</td>
                                <td>5</td>
                                <td>park.it</td>
                                <td>-</td>
                                <td>9</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>cooldomain.app</td>
                                <td>8</td>
                                <td>1</td>
                                <td>sitehub.io</td>
                                <td>-</td>
                                <td>14</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>brandname.io</td>
                                <td>9</td>
                                <td>6</td>
                                <td>domains.com</td>
                                <td>-</td>
                                <td>7</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>newdomain.info</td>
                                <td>6</td>
                                <td>3</td>
                                <td>parkdomain.net</td>
                                <td>-</td>
                                <td>10</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>tech-space.io</td>
                                <td>14</td>
                                <td>8</td>
                                <td>domainhub.io</td>
                                <td>-</td>
                                <td>12</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>findme.net</td>
                                <td>5</td>
                                <td>2</td>
                                <td>park.net</td>
                                <td>-</td>
                                <td>11</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>webservice88888888.org</td>
                                <td>10</td>
                                <td>3</td>
                                <td>domainspace.io</td>
                                <td>-</td>
                                <td>9</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="tr"
                                        class="ux-checkbox-input expiring-domain-checkbox" data-value="" /></td>
                                <td>1234561.io</td>
                                <td>12</td>
                                <td>4</td>
                                <td>domainlink.com</td>
                                <td>-</td>
                                <td>10</td>
                                <td>4</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        $(function() {

            // on pattern select all toggle selections
            $('input[name="patterns"]').on('change', function() {
                const input = $(this);
                input.is(':checked') ?
                    $('input[name="pattern"]').prop('checked', true) : // check all
                    $('input[name="pattern"]').prop('checked', false); // uncheck all
            });

            // on TLDs select all toggle selections
            $('input[name="tlds"]').on('change', function() {
                const input = $(this);
                input.is(':checked') ?
                    $('.tldsAll').prop('checked', true) : // check all
                    $('.tldsAll').prop('checked', false); // uncheck all
            });

            // for market place
            $('input[name="select-all-market"]').on('change', function() {
                const input = $(this);
                input.is(':checked') ?
                    $('input[name="market"]').prop('checked', true) : // check all
                    $('input[name="market"]').prop('checked', false); // uncheck all
            });

            // for market place
            $('input[name="select-all-type"]').on('change', function() {
                const input = $(this);
                input.is(':checked') ?
                    $('input[name="type"]').prop('checked', true) : // check all
                    $('input[name="type"]').prop('checked', false); // uncheck all
            });
            // socket.on('connect', () => {
            //         console.log('connected');
            //         // getData();
            //         $('#loader').show();
            //     })
            //     .on("disconnect", () => {
            //         console.log(socket.id, "user disconnected");
            //     });


            const getData = () => { // on load get data from the socket
                socket.emit('getShortDomains');
            }


            let dataTable = $("#example").DataTable({}); // Variable to hold the DataTable instance
            // socket.on('getShortDomains', async (body) => {
            //     $('#loader').hide();
            //     console.log({
            //         body
            //     });

            //     const results = body.data;
            //     const domains = await Promise.all(
            //         results.map(async (result) => {

            //             return [`<input type="checkbox" name="tr" class="ux-checkbox-input expiring-domain-checkbox" data-value="${result[0]}"/>`,
            //                 result[0],
            //                 result[1],
            //                 result[2],
            //                 result[3],
            //                 result[4],
            //                 result[5],
            //                 result[6],
            //             ];
            //         })

            //     );
            //     appendToTable(domains);
            // });


            function appendToTable(data) {
                $('#loader').hide();
                if (dataTable) {
                    dataTable.rows.add(data).draw();
                } else {
                    dataTable = $("#example").DataTable({
                        data: data,
                        columns: [{
                                title: `<input type="checkbox" name="tr" class="ux-checkbox-input expiring-domain-checkbox-all"> <label for="all">Select All</label>`
                            },
                            {
                                title: "Domain List"
                            },
                            {
                                title: "Domain Character Length"
                            },
                            {
                                title: "Domain Age"
                            },
                            {
                                title: "Domain Source"
                            },
                            {
                                title: "Listing Type"
                            },
                            {
                                title: "Price"
                            },
                            {
                                title: "Expires"
                            }
                        ],
                    });
                }
            }

            //apply the filters
            $('input[type="checkbox"]').on('change', function() {
                // console.log('checked ');
                const name = $(this).attr('name');
                console.log("🚀 ~ $ ~ name:", name);
                if (name != 'tr') {
                    applyFilter();
                }
            });

            // for domain name search
            $('input[type="text"]').on('keyup', function() {
                const value = $(this).val();
                let intervalId;
                clearInterval(intervalId)
                intervalId = setTimeout(() => {
                    applyFilter();
                    console.log('called')
                }, 1000)
            });

            // for number inputs like domain age, price
            $('input[type="number"]').on('keyup', function() {
                const value = $(this).val();
                let intervalId;
                clearInterval(intervalId)
                intervalId = setTimeout(() => {
                    applyFilter();
                }, 1000)
            });


            // Function to determine if a character is a consonant, vowel, letter, or number
            function getPatternType(char) {
                if (/[AEIOUaeiou]/.test(char)) return 'V'; // Vowel
                if (/[A-Za-z]/.test(char)) return 'L'; // Letter
                if (/[0-9]/.test(char)) return 'N'; // Number
                return 'C'; // Consonant by default if not a vowel, letter, or number
            }

            // Convert a domain name to its pattern representation (e.g., "VCCC")
            function getDomainPattern(domainName) {
                return domainName.split('').map(char => getPatternType(char)).join('');
            }

            function applyFilter() {
                $('#loader').show();
                setTimeout(() => $('#loader').hide(), 1000);

                const tlds = $('input[name="tld"]:checked').map(function() {
                    return $(this).val();
                }).get();

                const patterns = $('input[name="pattern"]:checked').map(function() {
                    return $(this).val();
                }).get();

                const options = $('input[name="options"]:checked').map(function() {
                    return $(this).val();
                }).get();

                const market = $('input[name="market"]:checked').map(function() {
                    return $(this).val().toLowerCase();
                }).get();

                const domainSearch = $('input[name="domain-search"]').val();

                let ageFrom = $('input[name="ageFrom"]').val();
                let ageTo = $('input[name="ageTo"]').val();
                let priceFrom = $('input[name="priceFrom"]').val();
                let priceTo = $('input[name="priceTo"]').val();

                if (ageFrom) ageFrom = Number(ageFrom);
                if (ageTo) ageTo = Number(ageTo);
                if (priceFrom) priceFrom = Number(priceFrom);
                if (priceTo) priceTo = Number(priceTo);


                // Clear previous search filters
                $.fn.dataTable.ext.search = [];

                const regexPatterns = patterns.map(pattern => {

                    if (pattern === 'L') {
                        return /^[a-zA-Z]$/; // Matches any single letter
                    } else if (pattern === 'LL') {
                        return /^[a-zA-Z]{2}$/; // Matches two letters
                    } else if (pattern === 'LLL') {
                        return /^[a-zA-Z]{3}$/; // Matches three letters
                    } else if (pattern === 'LLLL') {
                        return /^[a-zA-Z]{4}$/; // Matches four letters
                    } else if (pattern === '5L') {
                        return /^[a-zA-Z]{5}$/; // Matches five letters
                    } else if (pattern === '6L') {
                        return /^[a-zA-Z]{6}$/; // Matches six letters
                    } else if (pattern === '7L') {
                        return /^[a-zA-Z]{7}$/; // Matches seven letters
                    } else if (pattern === '8L') {
                        return /^[a-zA-Z]{8}$/; // Matches eight letters
                    } else if (pattern === 'CC') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{2}$/ // Two consonants
                    } else if (pattern === 'CV') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU]$/ // Consonant followed by vowel
                    } else if (pattern === 'CVC') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]$/ // Consonant-vowel-consonant
                    } else if (pattern === 'CVV') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU]{2}$/ // Consonant followed by two vowels
                    } else if (pattern === 'VCC') {
                        return /^[aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{2}$/ // Vowel followed by two consonants
                    } else if (pattern === 'VCV') {
                        return /^[aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU]$/ // Vowel-consonant-vowel
                    } else if (pattern === 'VVC') {
                        return /^[aeiouAEIOU]{2}[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]$/ // Two vowels followed by consonant
                    } else if (pattern === 'VVV') {
                        return /^[aeiouAEIOU]{3}$/ // Three vowels
                    } else if (pattern === 'CCCC') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{4}$/ // Four consonants
                    } else if (pattern === 'CCCV') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{3}[aeiouAEIOU]$/ // Three consonants followed by vowel
                    } else if (pattern === 'CCVC') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{2}[aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]$/ // Two consonants, vowel, consonant
                    } else if (pattern === 'CCVV') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{2}[aeiouAEIOU]{2}$/ // Two consonants followed by two vowels
                    } else if (pattern === 'CVCC') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{2}$/ // Consonant, vowel, two consonants
                    } else if (pattern === 'CVCV') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU]$/ // Consonant-vowel-consonant-vowel
                    } else if (pattern === 'CVVC') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU]{2}[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]$/ // Consonant, two vowels, consonant
                    } else if (pattern === 'CVVV') {
                        return /^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU]{3}$/ // Consonant followed by three vowels
                    } else if (pattern === 'VCCC') {
                        return /^[aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{3}$/ // Vowel followed by three consonants
                    } else if (pattern === 'VCCV') {
                        return /^[aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{2}[aeiouAEIOU]$/ // Vowel, two consonants, vowel
                    } else if (pattern === 'VCVC') {
                        return /^[aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]$/ // Vowel-consonant-vowel-consonant
                    } else if (pattern === 'VCVV') {
                        return /^[aeiouAEIOU][bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU]{2}$/ // Vowel, consonant, two vowels
                    } else if (pattern === 'VVCC') {
                        return /^[aeiouAEIOU]{2}[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{2}$/ // Two vowels, two consonants
                    } else if (pattern === 'VVCV') {
                        return /^[aeiouAEIOU]{2}[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ][aeiouAEIOU]$/ // Two vowels, consonant, vowel
                    } else if (pattern === 'VVVC') {
                        return /^[aeiouAEIOU]{3}[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]$/ // Three vowels followed by consonant
                    } else if (pattern === 'VVVV') {
                        return /^[aeiouAEIOU]{4}$/ // Four vowels
                    } else if (pattern === 'N') {
                        return /^\d$/ // One digit
                    } else if (pattern === 'NN') {
                        return /^\d{2}$/ // Two digits
                    } else if (pattern === 'NL') {
                        return /^\d[a-zA-Z]$/ // Digit followed by letter
                    } else if (pattern === 'LN') {
                        return /^[a-zA-Z]\d$/ // Letter followed by digit
                    } else if (pattern === 'NNN') {
                        return /^\d{3}$/ // Three digits
                    } else if (pattern === 'NNL') {
                        return /^\d{2}[a-zA-Z]$/ // Two digits followed by letter
                    } else if (pattern === 'NLN') {
                        return /^\d[a-zA-Z]\d$/ // Digit, letter, digit
                    } else if (pattern === 'NLL') {
                        return /^\d[a-zA-Z]{2}$/ // Digit followed by two letters
                    } else if (pattern === 'LNN') {
                        return /^[a-zA-Z]\d{2}$/ // Letter followed by two digits
                    } else if (pattern === 'LNL') {
                        return /^[a-zA-Z]\d[a-zA-Z]$/ // Letter, digit, letter
                    } else if (pattern === 'LLN') {
                        return /^[a-zA-Z]{2}\d$/ // Two letters followed by digit
                    } else if (pattern === 'NNNN') {
                        return /^\d{4}$/ // Four digits
                    } else if (pattern === '5N') {
                        return /^\d{5}$/ // Five digits
                    } else if (pattern === '6N') {
                        return /^\d{6}$/ // Six digits
                    } else if (pattern === '7N') {
                        return /^\d{7}$/ // Seven digits
                    } else if (pattern === '8N') {
                        return /^\d{8}$/ // Eight digits
                    }
                    // Add other custom patterns as needed
                    return null; // Return null if no matching regex is found

                }).filter(Boolean); // Filter out any null values

                // Filter based on selected extensions (ext[])
                $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                    const domainName = data[1].trim();
                    const domainPattern = getDomainPattern(domainName);
                    const matchesExtension = tlds.length > 0 && tlds
                        .some(ext => domainName.endsWith(ext));

                    const domainSource = data[4].trim().toLowerCase();

                    // Check for pattern match
                    const domainWithoutExt = domainName.split('.')[0]
                    const matchesPatternResult = regexPatterns.length > 0 && regexPatterns.some(regex => {
                        // Ensure the regex is valid before calling .test()
                        return regex && regex.test(domainWithoutExt);
                    });

                    //age check 
                    const domainAge = data[3].trim();
                    const ageStart = ageFrom && !isNaN(domainAge) && domainAge >= ageFrom
                    const ageEnd = ageTo && !isNaN(domainAge) && domainAge <= ageTo

                    //price check
                    const domainPrice = data[6].trim();
                    const priceStart = priceFrom && !isNaN(domainPrice) && domainPrice >= priceFrom
                    const priceEnd = priceTo && !isNaN(domainPrice) && domainPrice <= priceTo


                    const markets = market.length > 0 && market.includes(domainSource);
                    const matchesSearchTerm = domainSearch && domainName.includes(
                        domainSearch); // Check if the domain matches the search term

                    let matchesOptions = false;
                    if (options.includes("numberOnly") && /^\d+$/.test(domainWithoutExt)) matchesOptions =
                        true;
                    if (options.includes("noNumber") && /^[^\d]*$/.test(domainWithoutExt)) matchesOptions =
                        true;
                    if (options.includes("noHyphen") && !domainWithoutExt.includes("-")) matchesOptions =
                        true;
                    if (options.includes("alphabets") && /^[A-Za-z]+$/.test(domainWithoutExt))
                        matchesOptions = true;
                    if (options.includes("idnOnly") && /[^\u0000-\u007F]/.test(domainWithoutExt))
                        matchesOptions = true; // No IDN characters
                    if (options.includes("noIdn") && !/[^\u0000-\u007F]/.test(domainWithoutExt))
                        matchesOptions = true; // Has IDN characters
                    if (options.includes("alphaNumeric") && /^(?=.*[a-zA-Z])(?=.*\d).+$/.test(
                            domainWithoutExt)) matchesOptions = true; // Only alphanumeric characters
                    return matchesExtension || matchesPatternResult || matchesSearchTerm ||
                        matchesOptions || markets || ageStart || ageEnd || priceStart || priceEnd;
                })

                // Show row if matches either the extension or the source
                if (tlds.length === 0 && patterns.length === 0 && domainSearch === '' && options.length === 0 &&
                    market.length === 0 && ageFrom === '' && ageTo === '' && priceFrom === '' && priceTo === '') {
                    console.log('inside clearning all filter')
                    $.fn.dataTable.ext.search = [];
                }
                // Redraw the table with the combined filters applied
                dataTable.draw();
            }



            // csv export
            $("#export-csv").on("click", function() {

                let csvContent =
                    "Domain List ,Domain Character Length, Domain Age, Domain Source, Listing Type, Price, Expires\r\n"; // CSV Header
                let rowsExported = false;

                dataTable.rows({
                    filter: "applied"
                }).every(function() {
                    const row = this.node();
                    const checkbox = $(row).find(".expiring-domain-checkbox");
                    if (checkbox.prop("checked")) {
                        const data = this.data(); // Get data from DataTable
                        const price = `"${data[6]}"`; // Wrap price in double quotes
                        csvContent +=
                            `${data[1]},${data[2]},${data[3]},${data[4]},${data[5]},${price},${data[7]}\r\n`; // Include domain name
                        rowsExported = true;
                    }
                });

                if (!rowsExported) {
                    alert("No rows selected for export.");
                    return;
                }

                const blob = new Blob([csvContent], {
                    type: "text/csv;charset=utf-8;",
                });
                const link = document.createElement("a");
                const url = URL.createObjectURL(blob);
                link.setAttribute("href", url);
                link.setAttribute("download", "selected_rows.csv");
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });

            // excel export
            $("#export-excel").on("click", function() {
                let excelContent =
                    `<table><thead><tr>
                    <th>Domain List</th>
                    <th>Domain Character Length</th>
                    <th>Domain Age</th>
                    <th>Domain Source</th>
                    <th>Listing Type</th>
                    <th>Price</th>
                    <th>Expires</th></tr></thead><tbody>`;
                let rowsExported = false;

                dataTable.rows({
                    filter: "applied"
                }).every(function() {
                    const row = this.node();
                    const checkbox = $(row).find(".expiring-domain-checkbox");
                    if (checkbox.prop("checked")) {
                        const data = this.data(); // Get data from DataTable
                       excelContent +=`<tr>
                        <td>${data[1]}</td>
                        <td>${data[2]}</td>
                        <td>${data[3]}</td>
                        <td>${data[4]}</td>
                        <td>${data[5]}</td>
                        <td>${data[6]}</td>
                        <td>${data[7]}</td>
                        </tr>`; // Include domain name
                        rowsExported = true;
                    }
                });
                excelContent += "</tbody></table>";

                if (!rowsExported) {
                    alert("No rows selected for export.");
                    return;
                }

                const blob = new Blob([excelContent], {
                    type: "application/vnd.ms-excel",
                });
                const link = document.createElement("a");
                const url = URL.createObjectURL(blob);
                link.setAttribute("href", url);
                link.setAttribute("download", "selected_rows.xls");
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });

            $(document).on('change', '.expiring-domain-checkbox-all', function() {
                // Check or uncheck all checkboxes based on the state of the 'Check All' checkbox
                $('.expiring-domain-checkbox').prop('checked', this.checked);
            });

            // When any individual checkbox is clicked
            $(document).on('change', '.expiring-domain-checkbox', function() {
                // If any checkbox is unchecked, uncheck the 'Check All' checkbox
                if (!this.checked) {
                    $('.expiring-domain-checkbox-all').prop('checked', false);
                } else {
                    // If all individual checkboxes are checked, check the 'Check All' checkbox
                    if ($('.expiring-domain-checkbox:checked').length === $('.expiring-domain-checkbox')
                        .length) {
                        $('.expiring-domain-checkbox-all').prop('checked', true);
                    }
                }
            });

        });
    </script>
@endpush
