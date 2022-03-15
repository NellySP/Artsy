<img src="https://media.giphy.com/media/fvxQJ3BUUuqU1E8IM3/giphy-downsized.gif" width=100%>

# Artsy

Laravel project. This application allows you to create an account and browse through art pieces and collections online.

<details>
  <summary> Requirements </summary>
    
- Features  
    - Controllers
    - HTTP Tests (on all routes)
    - Middleware
    - Models (with relationships)
    - Routes (with route model binding)
    - Eloquent
    - Validation
    - Views (Blade)
    - Migrations
    - Laravel Mix

### Requirements

-   Each group should write a code review of at least 20 comments.
-   The code syntax must adhere to the PSR-12 standard.
-   Application must use the Clockwork extension.
-   To not use any JavaScript frameworks.
</details>

# Installation

In order to do this you will need to have PHP installed on your computer.

Install this project by following these steps:

<b> Clone the repository from this address: </b>

```
https://github.com/NellySP/artsy.git
```

<br>
<b> In the project's root folder, start a php server by typing this in your terminal: </b>

```
php -S localhost:8000
```

<br>
<b> Open up your browser and paste this URL in the address bar: </b>

```
https://localhost:8000
```

# Code Review

Code review written by [Alice Nyberg](https://github.com/alicenyberg) & [Anton Marinov](https://github.com/antmar0417).

1. `tip` - Send email doesn’t work.
2. `tip` - The navbar links are hard read regarding the Accessibility.
3. `tip` - Same with the p-tag text, consider using different colors!
4. `footer.blade.php` - The copy rights text is positioned on the one of the input fields.
5. `admin` - You should tell the user what to do with the image field. Is the user supposed to upload an image?
6. `tip` - Remember to add comments.
7. `admin.blade.php:9` - You have used camel case for your classname. Remember to be consistent writing code.
8. `admin.blade.php:35` - You have used snake case for your id-name.
9. `tip` - Consider use required on your input fields.
10. `views` - You have used kebab case on your user-page.blade and snake case on your welcome.email.blade. Maybe pick one? (:
11. `views` - Same thing with signUp.blade.php and singleExhibition.blade, where you have been using camel case!
12. `tip` - Remember to use placeholders on your input fields.
13. `app.css:30` - Rembe to remove commented code.
14. `signup.blade.php:21` - Use button instead av an input field.
15. `tip` - Remember to center your pictures.
16. `singleexhibitionController.php:13` - Remember to remove blank spaces.
17. `app.css:3` - Rembe to remove commented code.
18. `css` -Maybe style your sign in-form and sign up-form in the same way? The sign up input-fields have a border-radius for example.
19. `test` - You've done a great job with your tests!
20. `readme` - Remember to add an instructions how to run the project.

Overall you've done a great job with good consistancy. Well done! (:
