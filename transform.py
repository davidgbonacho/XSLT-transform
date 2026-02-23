from lxml import etree
import sys

# Transform files pased as asguments
print(sys.argv)

# Load XML & XSLT
xml = etree.parse(sys.argv[1])
xslt = etree.parse(sys.argv[2])

# Create tranformer
transform = etree.XSLT(xslt)

# Apply transform
resultado = transform(xml)

# Save result
with open("result.html", "wb") as f:
    f.write(etree.tostring(resultado, pretty_print=True, encoding="UTF-8"))

print("Transform completed. Load result.html")