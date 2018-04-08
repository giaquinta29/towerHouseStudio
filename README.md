# First
Create a PHP endpoint that will be called using Ajax, 
The endpoint should receive the following JSON request 

Request
{
	values:[x, y]
	operation:’sum’|’subtraction’|’division’|’multiplication’
}

And the response:

Response
{
	Result:x
	Status:’OK’|’error’
}

You should be able to handle and respond to possible errors.
You will need to upload this to your own github account and share the link here.



# Next
You need to create a webpage that takes 2 numbers as input, select the operation from a dropdown and click a button that calls the endpoint created in the previous step using ajax. You’ll need to display the results returned from the endpoint. 

The web page needs to follow this layout.



You will have to call the endpoint with the following JSON object: 

Request
{
	values:[x, y]
	operation:’sum’|’subtraction’|’division’|’multiplication’
}

Response
{
	Result:x
	Status:’OK’|’error’
}

