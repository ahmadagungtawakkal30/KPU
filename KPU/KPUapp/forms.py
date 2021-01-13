from django import forms
from .models import Prodi
from django.core import validators


class addProdi(forms.ModelForm):
    kode_prodi = forms.CharField()

    class Meta:
        model = Prodi
        fields = ('kode_prodi', 'nama_prodi')

    def clean(self):
        cleaned_data = super().clean()
        kode_prodi = cleaned_data.get("kode_prodi")

        if kode_prodi == None:
            raise forms.ValidationError(
                "Isi kode Prodi")
