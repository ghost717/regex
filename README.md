# regex

### Character Classes
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

### Position Anchors
- ^p	Matches the letter p at the beginning of a line.
- p$	Matches the letter p at the end of a line.

### Pattern Modifiers
- i	Makes the match case-insensitive manner.
- m	Changes the behavior of ^ and $ to match against a newline boundary (i.e. start or end of each line within a multiline string), instead of a string boundary.
- g	Perform a global match i.e. finds all occurrences.
- o	Evaluates the expression only once.
- s	Changes the behavior of . (dot) to match all characters, including newlines.
- x	Allows you to use whitespace and comments within a regular expression for clarity.