﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Plantal.CLIENTE
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class Contatos : ContentPage
	{
		public Contatos ()
		{
			InitializeComponent ();
		}

        private async void Button_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MenuCliente());
        }
    }
}