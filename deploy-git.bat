@echo off
echo ========================================================
echo  FinVest Theme - Git Initialization and GitHub Creation
echo ========================================================

git init
git add .
git commit -m "feat: initial FinVest WordPress theme"
gh repo create finvest-landing --public --source=. --remote=origin --push --description "FinVest Financial Consulting WordPress Theme - Portfolio project"

echo.
echo Process completed! Check your repository on GitHub.
pause
