# Laravel 5 Pivot Table Example
I keep forgetting what this looks like, no one else seems to have a simple example to refer to.
Everyone seems to cover the Model set up.
So, mostly for myself, I have a simple example I can use as a snippet.
Hope you find it useful.
## Free Beer Licence
Free - As in *Free Beer.*
## How to Use
This is simply an example of the pivot table you'd need for Laravel 5 Many to Many relationships.
### Laravel 5 Pivot Table
Say you have two models. **Blog** and **Tag**

1. You create the table name by taking the *singular* of the model names - so 'blog' and 'tag'.
2. Laravel 5 expects them to be in alphabetical order and separated by an underscore. 'blog\_tag'
3. Set up the foreign keys as you normally would, but put both in this table.

Anyways, check out the example.

## Resources
https://laracasts.com/series/laravel-5-fundamentals/episodes/21

https://laravel.com/docs/5.2/eloquent-relationships#many-to-many
