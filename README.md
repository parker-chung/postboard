## Start the project

Inside the project directory:
- run `composer update --no-scripts` or `composer install`
- run `npm install && npm run dev`
- rename 'example.env' to '.env' and change database credentials
- run `php artisan key:generate`
- run `php artisan migrate` (make sure to have the database running in the server)


## Frontend
- 'Login' - log in with an exsiting account
- 'Register' - create a new account
<img src="https://user-images.githubusercontent.com/57929314/179745314-944b2912-faa8-48ce-8584-44c37b2a540b.png" alt="login & register" width="200"/>

- 'Logout' - log out <br>
<img src="https://user-images.githubusercontent.com/57929314/179744525-44e6e796-60ec-43bd-802b-2a9e6d453b84.png" alt="log out" width="400"/>

- 'Create' - create a new post <br>
<img src="https://user-images.githubusercontent.com/57929314/179744398-af03178b-4a3a-4b96-ab1d-074e1dddcb77.png" alt="create" width="400"/>

- 'Edit' - edit the specified post (only displays & works for one's own posts)
- 'Delete' - delete the specified post (only displays & works for one's own posts) <br>
<img src="https://user-images.githubusercontent.com/57929314/179744679-d5cd1e9f-ee40-48f5-adb8-208ec13f5289.png" alt="edit & delete" width="400"/>


## Backend

### Display All Posts

API URL: `/` || `/posts`

API Request Method: GET
<table>
<tr>
<th>Header</th>
<th>Type</th>
<th>Required?</th>
<th>Description</th>
</tr>
<tr>
<td>api-token</td>
<td>string</td>
<td>optinal</td>
<td>token created when logging in</td>
</tr>
</table>

<table>
<tr>
<th>Body</th>
<th>Type</th>
<th>Required?</th>
<th>Description</th>
</tr>
<tr>
<td>None</td>
<td></td>
<td></td>
<td></td>
</tr>
</table>

Response: <br>
<img src="https://user-images.githubusercontent.com/57929314/179732547-c9a059ab-4dc2-4cfe-811a-6a1a5529ed32.png" alt="" width="400"/>


### Store a new post

API URL: `/`

API Request Method: POST
<table>
<tr>
<th>Header</th>
<th>Type</th>
<th>Required?</th>
<th>Description</th>
</tr>
<tr>
<td>api-token</td>
<td>string</td>
<td>optinal</td>
<td>token created when logging in</td>
</tr>
</table>

<table>
<tr>
<th>Body</th>
<th>Type</th>
<th>Required?</th>
<th>Description</th>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>

Response: <br>
<img src="https://user-images.githubusercontent.com/57929314/179740536-80c141dd-1e07-4f0b-a531-8821789908ae.png" alt="" width="400"/>

### Update the specified post

API URL: `/posts/{post}`

API Request Method: POST (PATCH)
<table>
<tr>
<th>Header</th>
<th>Type</th>
<th>Required?</th>
<th>Description</th>
</tr>
<tr>
<td>api-token</td>
<td>string</td>
<td>Required</td>
<td>token created when logging in</td>
</tr>
</table>

<table>
<tr>
<th>Body</th>
<th>Type</th>
<th>Required?</th>
<th>Description</th>
</tr>
<tr>
<td>id</td>
<td>integer</td>
<td>required</td>
<td>post id</td>
</tr>
</table>

Response: <br>
<img src="https://user-images.githubusercontent.com/57929314/179743405-fff4e4af-e73a-4a1e-8ad2-4cde30ad64d2.png" alt="" width="400"/>



### Delete the specified post

API URL: `/posts/{post}`

API Request Method: POST (DELETE)
<table>
<tr>
<th>Header</th>
<th>Type</th>
<th>Required?</th>
<th>Description</th>
</tr>
<tr>
<td>api-token</td>
<td>string</td>
<td>Required</td>
<td>token created when logging in</td>
</tr>
</table>

<table>
<tr>
<th>Body</th>
<th>Type</th>
<th>Required?</th>
<th>Description</th>
</tr>
<tr>
<td>id</td>
<td>integer</td>
<td>required</td>
<td>post id</td>
</tr>
</table>

Response: <br>
<img src="https://user-images.githubusercontent.com/57929314/179743585-3dd3e1c4-3eab-4204-9707-ffc8e6d1d09e.png" alt="" width="400"/>

