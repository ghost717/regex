# regex

### Character Classes
RegExp  - What it Does
- [abc]	- Matches any one of the characters a, b, or c.
- [^abc]	- Matches any one character other than a, b, or c.
- [A-Z]	- Matches any one character from uppercase a to uppercase z.
- [a-z]	- Matches any one character from lowercase a to lowercase z.
- [a-Z]	- Matches any one character from lowercase a to uppercase Z.
- [0-9]	- Matches a single digit between 0 and 9.
- [a-z0-9] - Matches a single character between a and z or between 0 and 9.

### Predefined Character Classes
- .	Matches any single character except newline \n.
- \d	matches any digit character. Same as [0-9]
- \D	Matches any non-digit character. Same as [^0-9]
- \s	Matches any whitespace character (space, tab, newline or carriage return character). Same as [ \t\n\r]
- \S	Matches any non-whitespace character. Same as [^ \t\n\r]
- \w	Matches any word character (definned as a to z, A to Z,0 to 9, and the underscore). Same as [a-zA-Z_0-9]
- \W	Matches any non-word character. Same as [^a-zA-Z_0-9]

### Repetition Quantifiers
- p+	Matches one or more occurrences of the letter p.
- p*	Matches zero or more occurrences of the letter p.
- p?	Matches zero or one occurrences of the letter p.
- p{2}	Matches exactly two occurrences of the letter p.
- p{2,3}	Matches at least two occurrences of the letter p, but not more than three occurrences of the letter p.
- p{2,}	Matches two or more occurrences of the letter p.
- p{,3}	Matches at most three occurrences of the letter p