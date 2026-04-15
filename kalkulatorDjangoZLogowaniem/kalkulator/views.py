from django.shortcuts import render, redirect
from django.contrib.auth import logout
from django.contrib.auth.decorators import login_required
from .forms import CalcForm


@login_required
def calc_view(request):
    result = None
    form = CalcForm(request.POST or None)

    if request.method == 'POST':
        if form.is_valid():
            kwota = form.cleaned_data['kwota']
            lata = form.cleaned_data['lata']
            opro = form.cleaned_data['opro']

            miesiace = lata * 12
            oprocentowanie_msc = (opro / 100) / 12

            if oprocentowanie_msc > 0:
                result = kwota * oprocentowanie_msc / (1 - (1 + oprocentowanie_msc) ** (-miesiace))
            else:
                result = kwota / miesiace

            result = round(result, 2)

    return render(request, 'calc_view.html', {'form': form, 'result': result})


def logout_view(request):
    logout(request)
    return redirect('login')