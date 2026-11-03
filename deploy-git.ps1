Write-Host "========================================================" -ForegroundColor Cyan
Write-Host " FinVest Theme - Git Initialization and GitHub Creation" -ForegroundColor Yellow
Write-Host "========================================================" -ForegroundColor Cyan

git init
git add .
git commit -m "feat: initial FinVest WordPress theme"
gh repo create finvest-landing --public --source=. --remote=origin --push --description "FinVest Financial Consulting WordPress Theme - Portfolio project"

Write-Host "`nRepository successfully created and pushed to GitHub!" -ForegroundColor Green
