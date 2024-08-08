import cssbeautifier

# Read the minified CSS file
with open('tabler.min.css', 'r') as f:
    minified_css = f.read()

# Beautify the CSS content
beautified_css = cssbeautifier.beautify(minified_css)

# Write the beautified CSS to a new file
with open('tabler.beautified.css', 'w') as f:
    f.write(beautified_css)

print("CSS has been beautified and saved to tabler.beautified.css")
