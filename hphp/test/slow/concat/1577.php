<?hh


<<__EntryPoint>>
function main_1577() :mixed{
echo <<<EOT
\t
\r
\a
\b
\f
\v
\"
\\
'\\' . \`\n\`;
'\'' . \`\n\`;
'\\' . '\'' . \`\n\`;
'\\' . \`'\` . \`\n\`;
\`\\\` . \`'\` . \`\n\`;
\`\101\` . \`\n\`;
\`\\\` . \`101\` . \`\n\`;
\`\1\` . \`101\` . \`\n\`;
\`\01\` . \`01\` . \`\n\`;
\`\01\` . \`g\` . \`\n\`;
\`\1\` . \`g\` . \`\n\`;
\`\011\` . \`01\` . \`\n\`;
\`\0111\` . \`01\` . \`\n\`;
\`\x\` . \`1\` . \`\n\`;
\`\x1\` . \`1\` . \`\n\`;
\`\x11\` . \`1\` . \`\n\`;
\`\x111\` . \`1\` . \`\n\`;
\`\x1111\` . \`1\` . \`\n\`;
\`\x11111\` . \`1\` . \`\n\`;
\`\777777\` . \`7\` . \`\n\`;
\`\0777777\` . \`7\` . \`\n\`;
\`\00777777\` . \`7\` . \`\n\`;
\`\0077\\`7777\` . \`7\` . \`\n\`;
\`\0077\\7777\` . \`7\` . \`\n\`;
\`\0077\a7777\` . \`7\` . \`\n\`;
\`\0077\b7777\` . \`7\` . \`\n\`;
\`\0077\f7777\` . \`7\` . \`\n\`;
\`\0077\n7777\` . \`7\` . \`\n\`;
\`\0077\r7777\` . \`7\` . \`\n\`;
\`\0077\t7777\` . \`7\` . \`\n\`;
\`\0077\v7777\` . \`7\` . \`\n\`;
\`\0077\07777\` . \`7\` . \`\n\`;
\`\0077\'7777\` . \`7\` . \`\n\`;
EOT;
}
