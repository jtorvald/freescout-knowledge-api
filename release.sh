#!/usr/bin/env sh
rm KnowledgeBaseApiModule-*.zip
zip -r KnowledgeBaseApiModule-1.0.1.zip KnowledgeBaseApiModule -x "*.DS_Store" -x ".git*" -x ".idea*" -x "*.gitkeep"
