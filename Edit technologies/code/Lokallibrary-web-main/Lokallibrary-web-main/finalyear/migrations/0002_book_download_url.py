# Generated by Django 3.0.7 on 2020-11-26 11:00

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('finalyear', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='book',
            name='download_url',
            field=models.URLField(max_length=1000, null=True),
        ),
    ]
