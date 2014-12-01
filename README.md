# Concrete5 5.7.x boilerplate for new themes.
 

## Theme structure
```
Theme/
	|— default.php
	|— view.php
	|— page_theme.php
	|— page_forbidden.php
	|— page_not_found.php
	|— description.txt
	|— thumbnail.png (120 x 90)
	|— elements/
		|— header.php
		|— footer.php
	|— img/
	|— js/
		|— main.js
		|—vendor/
```
## CSS
In the boilerplate we make use of Less. Concret5 5.7 comes included with a built-in Less compiler. All less files are imported in main.less. Concrete5 compiles and minify the css. To make the code more maintainable we have set up a folder / file structure.
```
/css
	|— main.less 
	|— general/ 
	|— vendor/
	|— layouts/
	|— components/
	|— blocks/
```


- **main.less;** All less files get imported. 
- **general/;** variables, typography
- **vendor/;** alle third party css (bootstrap)
- **layouts/;** styling for specific page types
- **components/;** Smaller components linke footer, buttons
- **blocks/;** styling for Concrete5 blocks


