<h3>Case Study: Currency calculator with php and Javascript</h3>

<p>The original task was to create a php currency calculator. However I was given specific instructions to use mainly Javascript. So, how would be a project based on Javascript front with php back? Laravel/Vue Js was the answer for me, though maybe a bit of an overkill.</p>
</p>The entire app was designed as a reactive single page application, with as much Javascript as possible and as less php as possible. Since Laravel comes with axios I used it for my AJAX calls.</p>
<p>There is no external api to feed the currency ratios, they are drawn from the database. The app stores the ratio for a given pair of currencies and the user, along withe pair of currencies can enter the desired amount to be calculated. New currencies can be added and old ones deleted via a modal panel. The ratios can be modified at any time if the default value is changed manually or a new pair without default data has been selected. All operations are performed asynchronously.</p>
</p>As always, feel free to make any suggestions if you care :)</p>

<p><strong>In order to run the app you will need of course a server and a database. Do not forget to run the migrations and seed the database afterwards, seeders have been prepared fro you!</strong></p>

<h3>Task Description</h3>
<em>
The task is to implement a PHP currency calculator.

The application’s input is the base currency, the target currency and the value that needs to be converted. The converted value is the output of the application.

Whilst implementing please keep in mind that the provided exchange rates might change (dynamic) and that it could be necessary to add new currencies to the application.

The following currencies should be convertible (the default ratio is given in the brackets):

Euro -> US Dollar (1.3764)
Euro -> Swiss Franc (1.2079)
Euro -> British Pound (0.8731)
US Dollar -> JPY (76.7200)
Swiss Franc -> US Dollar (1.1379)
British Pound -> CAD (1.5648)
</em>
