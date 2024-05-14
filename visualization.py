import pandas as pd
from sqlalchemy import create_engine
import plotly.express as px

# Set up database connection
engine = create_engine('mysql+pymysql://username:@host:port/survey_data')

# SQL query to fetch the data
query = """
SELECT question_text, response_text, COUNT(*) AS response_count
FROM responses
GROUP BY question_text, response_text
"""

# Fetch data into a DataFrame
df = pd.read_sql(query, engine)

# Close the database connection
engine.dispose()

# EDA: Create a bar chart for each question
for question in df['question_text'].unique():
    fig = px.bar(df[df['question_text'] == question],
                 x='response_text', y='response_count',
                 title=f'Responses for: {question}',
                 labels={'response_text': 'Responses', 'response_count': 'Count of Responses'})
    fig.show()
