# RSD Bootcamp API

The RSD Bootcamp API is a lightweight, self-hosted PHP script that pulls all of the RSD live event data and neatly organizes it into a JSON object. The script is capable of returning the full event data as well as filtered data categorized by city, state and country. 

# Usage

All files should be uploaded in the same directory, then pull.php should be called from your website or application.

The most efficient way to use the API is to access it via an AJAX POST or GET request, though other approaches are fine as well. A standard GET request (with no parameters) will return all live events while a POST request consisting of the variables 'city' and 'country' will return local and nearby results only.

A sample AJAX POST request using jQuery is shown below:

~~~
$.ajax({
  type: 'POST',
	url: 'http://hypreed.com/sandbox/scrape.php',
	data: { city: city, country: country },
	dataType: 'json',
		success: function(res){
			// res is the JSON obj
		}
	});
~~~

The return data is a standard JSON object. Some sample output is shown below:

~~~
{
    "events": {
        "0": {
            "program": [
                {
                    "title": "World summit",
                    "location": "Las Vegas, Nevada, USA",
                    "time": "August 4-10, 2013"
                }
            ]
        }
	}
}
~~~

To list the events, simply iterate over the object.

# License

**Copyright (c) 2012 McConnell Wade**

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
