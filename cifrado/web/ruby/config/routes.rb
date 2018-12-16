Rails.application.routes.draw do
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html

  get 'home/index'

  post '/cifrado', to: 'home#cifrado', :defaults => { :format => 'json' }
  root to: 'home#index'
end
