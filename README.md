NFL Running Back Performance Analysis

📋 Overview
This project aims to predict the performance of NFL running backs using historical data and machine learning models. The project involves data scraping, preprocessing, and predictive modeling to uncover insights about player performance.

📂 Project Structure
Here's the folder structure and a brief explanation of its contents:

`data/`: Contains datasets.
  - Raw data collected manually and via web scraping.
  - Preprocessed data ready for modeling.

`models/`: Contains RapidMiner workflows.
  - Data preprocessing workflow.
  - Model training and evaluation workflow.

`scrapers/`: PHP scripts for scraping data.
  - Scrapes player stats.
  - Scrapes team-related data.

`reports/`: Documentation and presentations.
  - Detailed project report.
  - Well designed presentation.
  - `screenshots/`: Contains visualizations and graphs.


🔧 Tools and Technologies
The following tools and technologies were used in this project:
- Google Refine: Data preprocessing and cleaning.
- RapidMiner: Building and evaluating machine learning models.
- PHP: HTML scraping scripts for collecting data.
- Excel: For manual data input and initial preprocessing.
- Python: Optional scripting for further data analysis and visualization.

🚀 Key Findings
Data Insights:
- Running backs with higher rushing yards and total carries per game performed better in touchdowns.
- Offensive team metrics significantly influenced player performance.

Model Performance:
- Best Model: Random Forest
- Training Accuracy: 85%
- Test Accuracy: 82%
- Key Predictive Features: Total rushing yards, number of carries, offensive line performance.

💾 How to Use
Clone the Repository:
To clone this repository to your local machine:
```bash
git clone https://github.com/Ganga-Suren/nfl-running-back-analysis.git
cd nfl-running-back-analysis

