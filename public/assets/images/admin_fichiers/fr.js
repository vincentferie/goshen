(function(global){var Language = {};

Language.pluralFormFunction = function (n) {
		if (n >= 0 && n <= 2 && n != 2) {
			return 'one';
		}

		return 'other';
	};


Language.bubble = Language.bubble || {};

Language.bubble.attention_grabber = {
	"message": "capteur d'attention de la conversation"
};


Language.chat = Language.chat || {};

Language.chat.Warning = {
	"message": "Attention"
};
Language.chat.accept_call = {
	"message": "Accepter"
};
Language.chat.active = {
	"message": "En ligne"
};
Language.chat.agent_profile_image = {
	"message": "Image du profil de l'agent"
};
Language.chat.agent_ringing = {
	"message": "Appel entrant"
};
Language.chat.all_conversations = {
	"message": "Voir toutes les conversations"
};
Language.chat.call_end_details = {
	"message": "Commencé à #startedOn pour une durée de #duration",
	"vars": [
		"startedOn",
		"duration"
	]
};
Language.chat.call_error_load = {
	"message": "Impossible de charger les détails de l'appel."
};
Language.chat.call_started_on = {
	"message": "Commencé à #startedOn",
	"vars": [
		"startedOn"
	]
};
Language.chat.chatEnded = {
	"message": "Votre discussion est terminée"
};
Language.chat.chat_icon = {
	"message": "Icon du chat"
};
Language.chat.chat_qm = {
	"message": "Discuter ?"
};
Language.chat.chat_text = {
	"message": "Conversation"
};
Language.chat.close_icon = {
	"message": "Fermer l'icone"
};
Language.chat.completed_call = {
	"message": "Appel terminé"
};
Language.chat.decline_call = {
	"message": "Refuser"
};
Language.chat.defaultName = {
	"message": "Vous (changer le nom)"
};
Language.chat.departmentIsAway = {
	"message": "Le département #strongStart #departmentName #strongEnd est actuellement indisponible.",
	"vars": [
		"departmentName",
		"strongStart",
		"strongEnd"
	]
};
Language.chat.departmentIsOffline = {
	"message": "Le département #strongStart #departmentName #strongEnd est actuellement hors ligne. Vous pouvez être servi par un autre département.",
	"vars": [
		"departmentName",
		"strongStart",
		"strongEnd"
	]
};
Language.chat.download = {
	"message": "Télécharger"
};
Language.chat.downloadFile = {
	"message": "Télécharger le fichier"
};
Language.chat.dragDropText = {
	"message": "Déposez les fichiers ici pour les envoyer"
};
Language.chat.emoji_error_load = {
	"message": "Impossible de charger les émoticônes"
};
Language.chat.error_title = {
	"message": "Erreur"
};
Language.chat.failed = {
	"message": "Échec"
};
Language.chat.generalUploadError = {
	"message": "\"#fileName\", veuillez recommencer.",
	"vars": [
		"fileName"
	]
};
Language.chat.generalUploadErrorLabel = {
	"message": "Impossible de télécharger le fichier"
};
Language.chat.goToLatest = {
	"message": "Accéder au plus recent"
};
Language.chat.hideButton = {
	"message": "Masquer la discussion"
};
Language.chat.incoming_call_message = {
	"message": "Appel entrant sur #name",
	"vars": [
		"name"
	]
};
Language.chat.insert_emoji = {
	"message": "Insérer émoticône"
};
Language.chat.justNow = {
	"message": "à l'instant"
};
Language.chat.limit2 = {
	"message": "La taille de fichier maximale est de 2Mo pour les navigateurs mobiles, veuillez envoyer un fichier plus petit."
};
Language.chat.limit50 = {
	"message": "La taille de fichier maximale est de 50Mo, veuillez envoyer un fichier plus petit."
};
Language.chat.message_not_delivered = {
	"message": "Le message n'a pas été délivré, cliquez ici pour le renvoyer."
};
Language.chat.message_too_long = {
	"message": "Le message ne peut dépasser 5000 caractères"
};
Language.chat.missed_agent = {
	"message": "Votre appel a été manqué"
};
Language.chat.missed_visitor = {
	"message": "Vous avez manqué un appel"
};
Language.chat.missed_visitor_messagePreview = {
	"message": "Vous avez manqué un appel de"
};
Language.chat.mobileName = {
	"message": "Vous"
};
Language.chat.newChat = {
	"message": "Démarrer une nouvelle discussion"
};
Language.chat.newMessages = {
	"message": "Nouveaux messages"
};
Language.chat.new_conversation = {
	"message": "Nouvelle conversation"
};
Language.chat.notificationTitle = {
	"message": "notification"
};
Language.chat.ongoing_call = {
	"message": "Appel sortant"
};
Language.chat.past = {
	"message": "Il y a #time",
	"vars": [
		"time"
	]
};
Language.chat.pasted_image_title = {
	"message": "Image collée à #dateTime",
	"vars": [
		"dateTime"
	]
};
Language.chat.profile_prechat_text = {
	"message": "Veuillez remplir le formulaire ci-dessous pour commencer à discuter avec moi."
};
Language.chat.rejected_call = {
	"message": "Vous avez rejeté cet appel"
};
Language.chat.remove_rate = {
	"message": "Vous avez retiré votre note pour cette conversation"
};
Language.chat.resend = {
	"message": "Renvoyer"
};
Language.chat.retry = {
	"message": "Réessayer."
};
Language.chat.say_something = {
	"message": "Écrire une réponse.."
};
Language.chat.screen_share_error = {
	"message": "Le Partage d'Ecran n'est pas disponible."
};
Language.chat.send_mail = {
	"message": "Envoyer un e-mail"
};
Language.chat.sent_file = {
	"message": "Envoyer un dossier"
};
Language.chat.today_time = {
	"message": "Aujourd'hui, #time",
	"vars": [
		"time"
	]
};
Language.chat.tryAgain = {
	"message": "Réessayez."
};
Language.chat.unanswered = {
	"message": "Sans réponse"
};
Language.chat.uploading = {
	"message": "Téléchargement en cours"
};
Language.chat.video_call_error = {
	"message": "Appel vidéo non disponible."
};
Language.chat.visitor_ringing = {
	"message": "Appel en cours..."
};
Language.chat.voice_call_error = {
	"message": "Appel vocal non disponible."
};
Language.chat.we_are_live = {
	"message": "Nous sommes prêts à discuter avec vous en direct. Dites quelque chose pour commencer une discussion en direct."
};


Language.days = Language.days || {};

Language.days['0'] = {
	"message": "Dimanche"
};
Language.days['1'] = {
	"message": "Lundi"
};
Language.days['2'] = {
	"message": "Mardi"
};
Language.days['3'] = {
	"message": "Mercredi"
};
Language.days['4'] = {
	"message": "Jeudi"
};
Language.days['5'] = {
	"message": "Vendredi"
};
Language.days['6'] = {
	"message": "Samedi"
};


Language.form = Language.form || {};

Language.form.CancelButton = {
	"message": "Annuler"
};
Language.form.CloseButton = {
	"message": "Fermer"
};
Language.form.DepartmentsErrorMessage = {
	"message": "Le département est nécessaire."
};
Language.form.DepartmentsPlaceholder = {
	"message": "Sélectionnez un département..."
};
Language.form.EmailErrorMessage = {
	"message": "Adresse e-mail invalide."
};
Language.form.EmailPlaceholder = {
	"message": "Adresse E-mail"
};
Language.form.EmailTranscriptFormMessage = {
	"message": "Veuillez remplir le formulaire ci-dessous pour recevoir cette conversation par e-mail."
};
Language.form.EmailTranscriptSuccess = {
	"message": "Demande de transcription a été envoyée par courriel."
};
Language.form.EmailTranscriptTo = {
	"message": "Envoyer la transcription à"
};
Language.form.EndChatMessage = {
	"message": "Merci d’avoir discuté avec nous. N’hésitez pas à démarrer une nouvelle session ou saisissez votre email pour recevoir une transcription de cette discussion."
};
Language.form.EndChatMessage2 = {
	"message": "Merci pour la conversation. N'hésitez pas à démarrer une nouvelle discussion."
};
Language.form.EndChatTitle = {
	"message": "Êtes-vous sûr de vouloir mettre fin à cette discussion ?"
};
Language.form.MessagePlaceholder = {
	"message": "Votre message...."
};
Language.form.NameErrorMessage = {
	"message": "Le nom doit être fourni."
};
Language.form.NameFormMessage = {
	"message": "Veuillez changer votre nom pour que nous puissions vous reconnaître la prochaine fois."
};
Language.form.OfflineFormMessage = {
	"message": "Veuillez remplir le formulaire ci-dessous et nous vous recontacterons dès que possible."
};
Language.form.OfflineMessageNotSent = {
	"message": "Votre message n’a pas été remis, réessayez s’il vous plaît"
};
Language.form.OfflineMessageSent = {
	"message": "Votre message a été envoyé avec succès !"
};
Language.form.PhoneErrorMessage = {
	"message": "Numéro de téléphone non valide"
};
Language.form.PreChatFormMessage = {
	"message": "Veuillez remplir le formulaire ci-dessous afin de pouvoir discuter avec le prochain agent disponible."
};
Language.form.PreChatFormMessageProfile = {
	"message": "Veuillez remplir le formulaire ci-dessous pour commencer à discuter avec moi."
};
Language.form.QuestionPlaceholder = {
	"message": "Votre question..."
};
Language.form.RequiredErrorMessage = {
	"message": "Ce champ est obligatoire"
};
Language.form.SaveButton = {
	"message": "Enregistrer"
};
Language.form.SendButton = {
	"message": "Envoyer"
};
Language.form.SendMessage = {
	"message": "Envoyer le message"
};
Language.form.StartChatButton = {
	"message": "Commencer la discussion"
};
Language.form.SubmitButton = {
	"message": "Envoyer"
};
Language.form.SubmittedFrom = {
	"message": "Soumis par"
};
Language.form.SubmittingProcess = {
	"message": "Envoi en cours"
};
Language.form.TranscriptMessage = {
	"message": "N’hésitez pas à entrer votre adresse email pour vous envoyer la transcription de cette conversation dans votre boîte mail."
};
Language.form.any = {
	"message": "Peu importe"
};
Language.form.chatEnded = {
	"message": "Cette discussion est terminée"
};
Language.form.department = {
	"message": "Département"
};
Language.form.email = {
	"message": "E-mail"
};
Language.form.errorSaving = {
	"message": "Impossible de sauvegarder. Veuillez réessayer"
};
Language.form.message = {
	"message": "Message"
};
Language.form.name = {
	"message": "Nom"
};
Language.form.sendAgain = {
	"message": "Renvoyer"
};
Language.form.visitButton = {
	"message": "Visitez tawk.to"
};


Language.home = Language.home || {};

Language.home.banner_image = {
	"message": "Image de bannière"
};
Language.home.chat_button = {
	"message": "Nouvelle conversation"
};
Language.home.chat_input = {
	"message": "Ecrire ici et appuyer sur entrée"
};
Language.home.heading_main = {
	"message": "Salut !"
};
Language.home.heading_sub = {
	"message": "Besoin d'aide ? Recherchez des réponses dans notre centre d’aide ou débutez une conversation :"
};
Language.home.kb_search = {
	"message": "Recherche une réponse"
};
Language.home.logo_image = {
	"message": "Image du logo"
};


Language.kb = Language.kb || {};

Language.kb.article_image = {
	"message": "Image de l'article"
};
Language.kb.article_rating = {
	"message": "Est-ce que cet article vous a aidé ?"
};
Language.kb.article_rating_count = {
	"message": "#totalLikes parmis #totalVotes ont aimé cet article",
	"vars": [
		"totalLikes",
		"totalVotes"
	]
};
Language.kb.author_profile_image = {
	"message": "Photo de profil de l'auteur"
};
Language.kb.clear_search = {
	"message": "Supprimer la recherche"
};
Language.kb.downvote_rating_button = {
	"message": "No"
};
Language.kb.help_center = {
	"message": "Centre d'aide"
};
Language.kb.negative_rating = {
	"message": "Négatif"
};
Language.kb.positive_rating = {
	"message": "Positif"
};
Language.kb.recent_searches = {
	"message": "Recherches récentes"
};
Language.kb.search_fail_description = {
	"message": "S'il vous plaît, essayez de nouveaux"
};
Language.kb.search_fail_title = {
	"message": "Aucun résultat de recherche"
};
Language.kb.search_placeholder = {
	"message": "Recherche de réponses"
};
Language.kb.search_results = {
	"message": "Résultats de recherche"
};
Language.kb.show_all_results = {
	"message": "Montrer tous les résultats (#num)",
	"vars": [
		"num"
	]
};
Language.kb.submit_search = {
	"message": "Soumettre une recherche"
};
Language.kb.upvote_rating_button = {
	"message": "Yes"
};
Language.kb.view_full = {
	"message": "Afficher en plein écran"
};


Language.menu = Language.menu || {};

Language.menu.change_name = {
	"message": "Changer de nom"
};
Language.menu.email_transcript = {
	"message": "Transcription par email"
};
Language.menu.end_chat_session = {
	"message": "Terminer cette discussion"
};
Language.menu.popout_widget = {
	"message": "Détacher le widget"
};
Language.menu.sound_off = {
	"message": "Son désactivé"
};
Language.menu.sound_on = {
	"message": "Son activé"
};


Language.months = Language.months || {};

Language.months['0'] = {
	"message": "Janvier"
};
Language.months['1'] = {
	"message": "Février"
};
Language.months['10'] = {
	"message": "Novembre"
};
Language.months['11'] = {
	"message": "Décembre"
};
Language.months['2'] = {
	"message": "Mars"
};
Language.months['3'] = {
	"message": "Avril"
};
Language.months['4'] = {
	"message": "Mai"
};
Language.months['5'] = {
	"message": "Juin"
};
Language.months['6'] = {
	"message": "Juillet"
};
Language.months['7'] = {
	"message": "Août"
};
Language.months['8'] = {
	"message": "Septembre"
};
Language.months['9'] = {
	"message": "Octobre"
};


Language.notifications = Language.notifications || {};

Language.notifications.dismiss_alert = {
	"message": "Rejeté l'alerte"
};
Language.notifications.maximum_file_upload_warning = {
	"message": "Désolé, le transfert de fichiers est limité à #limitFileNumber fichiers simultanés. Veuillez réessayer pour le(s) fichier(s) suivant(s) :",
	"vars": [
		"limitFileNumber"
	]
};
Language.notifications.maximum_size_upload_warning = {
	"message": "Désolé, le transfert de fichier est limité à #limitFileSize par fichier. Merci de compresser le(s) fichier(s) suivant(s) et de réessayer.",
	"vars": [
		"limitFileSize"
	]
};
Language.notifications.reconnecting = {
	"message": "Reconnection"
};
Language.notifications.retry = {
	"message": "Réessayer"
};


Language.overlay = Language.overlay || {};

Language.overlay.cookiesOff = {
	"message": "Vous ne pouvez pas utiliser ce système de discussion parce que la fonctionnalité de cookies de votre navigateur est désactivée. Veuillez l'activer ou mettre à jour votre navigateur."
};
Language.overlay.inactive = {
	"message": "Cliquez ici pour relancer la discussion"
};
Language.overlay.maintenance = {
	"message": "Le système de discussion est en maintenance"
};
Language.overlay.tawkContent = {
	"message": "Ce widget est propulsé par tawk.to - une application de messagerie gratuite qui vous permet d'accompagner et d’échanger avec les visiteurs de votre site Internet."
};


Language.rollover = Language.rollover || {};

Language.rollover.back = {
	"message": "Retour"
};
Language.rollover.chatMenu = {
	"message": "Menu"
};
Language.rollover.emailTranscriptOption = {
	"message": "Transcription par e-mail"
};
Language.rollover.end = {
	"message": "Terminer la discussion"
};
Language.rollover.knowledgeBase = {
	"message": "Base de connaissance"
};
Language.rollover.maximize = {
	"message": "Maximiser"
};
Language.rollover.minimize = {
	"message": "Minimiser"
};
Language.rollover.negativeRating = {
	"message": "Noter cette conversation avec -1"
};
Language.rollover.popOut = {
	"message": "Pop out"
};
Language.rollover.positiveRating = {
	"message": "Noter cette conversation avec +1"
};
Language.rollover.rateChat = {
	"message": "Évaluez cette conversation"
};
Language.rollover.resendMessage = {
	"message": "Renvoyer le message"
};
Language.rollover.resize = {
	"message": "Redimensionner"
};
Language.rollover.screenShare = {
	"message": "Partage d’Ecran"
};
Language.rollover.uploadFile = {
	"message": "Envoyer un fichier"
};
Language.rollover.videoCall = {
	"message": "Appel vidéo"
};
Language.rollover.voiceCall = {
	"message": "Appel vocal"
};


Language.routes = Language.routes || {};

Language.routes.all_agents = {
	"message": "Tous les agents"
};
Language.routes.conversations = {
	"message": "Les conversations"
};
Language.routes.load_more = {
	"message": "Téléchargez plus"
};


Language.status = Language.status || {};

Language.status.away = {
	"message": "Absent"
};
Language.status.offline = {
	"message": "Hors-ligne"
};
Language.status.online = {
	"message": "En ligne"
};




Language.chat = Language.chat || {};

Language.chat.hours = {
	"pluralVars": [
		"num"
	],
	"message": {
		"one": "#num heure",
		"other": "#num heures"
	}
};
Language.chat.messageQueuedText = {
	"pluralVars": [
		"t"
	],
	"message": {
		"one": "Le temps d'attente est estimé à #strongStart #t minute. #strongEnd",
		"other": "Le temps d'attente est estimé à #strongStart #t minutes. #strongEnd"
	},
	"vars": [
		"strongStart",
		"strongEnd"
	]
};
Language.chat.minutes = {
	"pluralVars": [
		"num"
	],
	"message": {
		"one": "#num minute",
		"other": "#num minutes"
	}
};
Language.chat.newMessage = {
	"pluralVars": [
		"num"
	],
	"message": {
		"one": "#num nouveau message",
		"other": "#num nouveaux messages"
	}
};
Language.chat.seconds = {
	"pluralVars": [
		"num"
	],
	"message": {
		"one": "#num seconde",
		"other": "#num secondes"
	}
};


global.$_Tawk.language = Language;})(window);